# Estrutura do portfólio SB22

O código está dividido por responsabilidade, sem alterar a localização original das quatro páginas.

- `data/`: conteúdo da agência, serviços e cinco projetos. Cada projeto tem o seu próprio ficheiro.
- `data/galleries/`: listas de imagens das galerias.
- `functions/`: funções PHP que carregam os dados, sem misturar HTML.
- `pages/`: páginas de entrada, com o conteúdo HTML e chamadas aos componentes.
- `includes/project-card.php`: modelo único para os cartões.
- `includes/project-modal.php`: janela com detalhes de um projeto.
- `includes/project-gallery.php`: galeria específica de cada trabalho.
- `assets/`: estilos, JavaScript, fotografias e vídeos.

Para acrescentar um projeto, criar um ficheiro em `data/projects/`, registá-lo em `data/projects.php` e adicionar uma imagem em `assets/images/projects/`. O cartão usará o mesmo modelo visual.

A página continua com os filtros em JavaScript e as galerias originais. O envio real de emails pelo formulário ainda precisa de configuração.

Esta alteração é destinada a manter o projeto PHP legível e a permitir uma futura migração para uma base de dados.
