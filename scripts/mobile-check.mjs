import { spawn } from 'node:child_process';
import { chromium } from 'playwright';

const server = spawn('php', ['-S', '127.0.0.1:8766', '-t', '.'], { stdio: 'ignore' });
const base = 'http://127.0.0.1:8766';

async function waitForServer() {
    for (let attempt = 0; attempt < 50; attempt++) {
        try {
            const response = await fetch(base + '/index.php');
            if (response.ok) return;
        } catch {}
        await new Promise(resolve => setTimeout(resolve, 200));
    }
    throw new Error('Serveur PHP indisponible');
}

let browser;
try {
    await waitForServer();
    browser = await chromium.launch({ headless: true });

    const paths = [
        '/index.php',
        '/pages/projets/projets.php',
        '/pages/projets/detail.php?project=kuba-home',
        '/pages/projets/detail.php?project=plumes-de-coeur',
        '/pages/projets/detail.php?project=kid-fitness-lexy',
        '/pages/projets/detail.php?project=plumes-de-coeur-publications',
        '/pages/projets/detail.php?project=youplaboom-meta'
    ];

    for (const width of [320, 375, 390, 768, 1440]) {
        const context = await browser.newContext({ viewport: { width, height: 850 }, deviceScaleFactor: 1 });
        const page = await context.newPage();

        for (const path of paths) {
            const response = await page.goto(base + path, { waitUntil: 'networkidle' });
            if (!response || response.status() !== 200) {
                throw new Error('Erreur de chargement : ' + path + ' à ' + width + 'px');
            }

            const check = await page.evaluate(() => {
                const viewport = document.documentElement.clientWidth;
                const entireWidth = document.documentElement.scrollWidth;
                const visibleImages = [...document.querySelectorAll('img')].filter(img => getComputedStyle(img).display !== 'none');
                const broken = visibleImages.filter(img => !img.complete || img.naturalWidth === 0).map(img => img.getAttribute('src'));
                const cards = [...document.querySelectorAll('.project-card, .editorial-project')];
                const outOfBounds = cards.filter(card => {
                    const r = card.getBoundingClientRect();
                    return r.left < -2 || r.right > viewport + 2;
                }).map(card => card.className);
                return { viewport, entireWidth, broken, outOfBounds };
            });

            if (check.entireWidth > check.viewport + 2) {
                throw new Error('Scroll horizontal em ' + path + ' à ' + width + 'px : ' + JSON.stringify(check));
            }
            if (check.broken.length) {
                throw new Error('Imagens em falta em ' + path + ' : ' + check.broken.join(', '));
            }
            if (check.outOfBounds.length) {
                throw new Error('Cards fora do ecrã em ' + path + ' : ' + check.outOfBounds.join(', '));
            }
        }

        await page.goto(base + '/pages/projets/projets.php');
        await page.locator('.project-card').first().click();
        await page.waitForURL('**/pages/projets/detail.php?project=*');
        if ((await page.locator('.case-heading h1').count()) !== 1) {
            throw new Error('A página do projeto não abriu.');
        }

        if (width < 1024) {
            await page.goto(base + '/index.php');
            const menu = page.locator('#mobile-menu-button');
            await menu.click();
            if (!(await page.locator('#mobile-menu').evaluate(el => el.classList.contains('open')))) {
                throw new Error('O menu mobile não abriu.');
            }
            await page.keyboard.press('Escape');
            if (await page.locator('#mobile-menu').evaluate(el => el.classList.contains('open'))) {
                throw new Error('O menu mobile não fechou com Escape.');
            }
        }

        await context.close();
    }

    console.log('Teste mobile e desktop concluído com sucesso.');
} finally {
    if (browser) await browser.close();
    server.kill('SIGTERM');
}
