# SB22 Agency — Versão B com 3 domínios (16/10/2026)

Esta versão parte da maquete B e preserva as animações WOW, a capa preta original de Kuba Home e o layout mobile. A versão anterior continua guardada na branch `stage/maquette-b-feedback-sebaa-20261015`.

## O que mudou

- **Social Media Management** — Kuba Home e publicações digitais de Plumes de Cœur Éditions.
- **Design graphique & signalétique** — vitrine e painéis de Plumes de Cœur Éditions.
- **Campagnes publicitaires Meta Ads** — anúncio gráfico e vídeo de Kid Fitness; vídeo e contexto da campanha Youplaboom.

São 5 fichas para 4 clientes. As informações dos serviços e objetivos foram adaptadas da mensagem da Madame Sebaa. Não foram inventadas estatísticas, resultados comerciais ou materiais que não existam nos ficheiros.

## Ficheiros importantes

- `maquettes/version-b/pages/projets/projets.html` — página de trabalhos com 5 cartões, filtros e 5 fichas.
- `maquettes/version-b/assets/js/feedback-domains.js` — filtra os trabalhos em tempo real, interpreta `?domaine=` e mantém a navegação do browser.
- `maquettes/version-b/assets/css/feedback-domains.css` — aparência dos filtros, cartões e adaptações mobile.
- `scripts/build_three_domains.py` — dados dos 5 projetos e código que gera as fichas usando ficheiros locais.
- `scripts/install_three_domains.py` — atualização da página inicial e redirecionamento das antigas páginas de filtros.
- `scripts/check_three_domains.py` — validação dos 5 projetos, das imagens, dos vídeos e das ligações.

Para atualizar o conteúdo dos projetos no futuro, modificar as descrições e imagens na lista `CASES` em `scripts/build_three_domains.py`, gerar `projets.html` e correr os testes. Os scripts de alterações anteriores à reorganização já não devem ser reaplicados sem revisão.

## Links e filtros

A lista de projetos é uma única página HTML; os filtros são botões que mostram/ocultam cartões. A categoria escolhida é refletida no URL pelo parâmetro `domaine` quando servido em HTTP(S). Os 19 URLs antigos de filtros encaminham para a nova página, preservando os links com identificadores de projetos.

## Testes e publicação

Executado: `python3 scripts/check_three_domains.py`, verificação de sintaxe JavaScript e navegação automatizada em larguras de 320, 375, 390, 768 e 1440 px. Os 3 filtros, os 5 projetos, os vídeos, a abertura/fecho de fichas e os links antigos passaram.

O formulário de contacto mantém a integração preparada para Netlify Forms. A entrega real das mensagens continua a necessitar de verificação após a publicação e ativação em Netlify.

O site publicado anteriormente não muda sozinho. Para atualizar o Netlify, arrastar o novo ZIP preparado para a pasta Downloads.
