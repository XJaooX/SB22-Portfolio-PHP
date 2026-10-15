import { spawn } from 'node:child_process';
import { mkdir, rm, writeFile, cp } from 'node:fs/promises';
import path from 'node:path';

const base = 'http://127.0.0.1:8768';
const output = path.resolve('dist');
const server = spawn('php', ['-S', '127.0.0.1:8768', '-t', '.'], { stdio: 'ignore' });

const projects = [
    'kuba-home',
    'plumes-de-coeur',
    'kid-fitness-lexy',
    'plumes-de-coeur-publications',
    'youplaboom-meta'
];

const routes = [
    ['/index.php', 'index.html'],
    ['/pages/agence/agence.php', 'pages/agence/agence.html'],
    ['/pages/projets/projets.php', 'pages/projets/projets.html'],
    ['/pages/expertises/expertises.php', 'pages/expertises/expertises.html'],
    ['/pages/contact/contact.php', 'pages/contact/contact.html'],
    ...projects.map(slug => ['/pages/projets/detail.php?project=' + slug, 'pages/projets/' + slug + '.html'])
];

async function awaitServer() {
    for (let i = 0; i < 45; i++) {
        try {
            const response = await fetch(base + '/index.php');
            if (response.ok) return;
        } catch {}
        await new Promise(resolve => setTimeout(resolve, 200));
    }
    throw new Error('Le serveur PHP ne répond pas.');
}

function convertLinks(html) {
    return html
        .replace(/detail\.php\?project=([a-z0-9-]+)/g, (_, slug) => slug + '.html')
        .replace(/\b(index|agence|projets|expertises|contact)\.php\b/g, (_, name) => name + '.html');
}

try {
    await awaitServer();
    await rm(output, { recursive: true, force: true });
    await mkdir(output, { recursive: true });
    await cp(path.resolve('assets'), path.join(output, 'assets'), { recursive: true });

    for (const [route, target] of routes) {
        const response = await fetch(base + route);
        if (!response.ok) throw new Error(route + ': HTTP ' + response.status);
        const text = await response.text();
        if (text.includes('Fatal error') || text.includes('Parse error')) {
            throw new Error('PHP incorrect : ' + route);
        }
        const destination = path.join(output, target);
        await mkdir(path.dirname(destination), { recursive: true });
        await writeFile(destination, convertLinks(text), 'utf8');
    }

    console.log('Export statique de ' + routes.length + ' pages dans dist/');
} finally {
    server.kill('SIGTERM');
}
