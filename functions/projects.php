<?php
function getProjects(): array
{
    return require __DIR__ . '/../data/projects.php';
}

function getProjectFilters(): array
{
    return require __DIR__ . '/../data/project-filters.php';
}

function getProjectGallery(string $name): array
{
    $allowed = ['kubaImages', 'plumesImages', 'plumesBlue', 'plumesPosts'];

    if (!in_array($name, $allowed, true)) {
        return [];
    }

    return require __DIR__ . '/../data/galleries/' . $name . '.php';
}
