<?php
$cases = [
    ['id' => 'kuba-home','domain' => 'social-media','sector' => '01 / Aménagement intérieur','name' => 'Kuba Home','description' => 'Une vitrine digitale premium pour les créations de Kuba Home.','image' => 'assets/images/projects/kuba/kuba-whatsapp/kuba-carousel-cover.jpg'],
    ['id' => 'plumes-social','domain' => 'social-media','sector' => '02 / Édition','name' => 'Plumes de Cœur Éditions','description' => 'Faire connaître la maison d’édition et son univers sur les réseaux sociaux.','image' => 'assets/images/projects/plumes-de-coeur/plumes-social/festival-yann-thomas.jpg'],
    ['id' => 'plumes-signaletique','domain' => 'design-graphique','sector' => '03 / Édition','name' => 'Plumes de Cœur Éditions','description' => 'Une identité éditoriale visible aussi dans l’espace physique.','image' => 'assets/images/projects/plumes-de-coeur/plumes-2.jpg'],
    ['id' => 'kid-fitness-lexy','domain' => 'meta-ads','sector' => '04 / Activités pour enfants','name' => 'Kid Fitness Lexy','description' => 'Promouvoir les journées portes ouvertes et encourager les inscriptions.','image' => 'assets/images/projects/kid-fitness/kid-fitness-poster.jpg'],
    ['id' => 'youplaboom-meta','domain' => 'meta-ads','sector' => '05 / Petite enfance','name' => 'Youplaboom','description' => 'Développer la visibilité locale de la microcrèche.','image' => 'assets/images/projects/youplaboom/youplaboom-meta-cover.jpg'],

    [
        'id' => 'atelier-respira',
        'domain' => 'production-video',
        'sector' => '06 / Bien-être & ateliers',
        'name' => 'Atelier RESPIRA',
        'description' => 'Deux vidéos originales pour présenter l’expérience et les temps forts de l’Atelier RESPIRA.',
        'image' => 'assets/images/projects/respira/respira-brand-cover.png',
        'context' => 'Un atelier bien-être présenté à travers deux vidéos destinées aux réseaux sociaux.',
        'objective' => 'Partager l’atmosphère de l’atelier et mettre en avant ses moments forts.',
        'intervention' => 'Conception et réalisation de deux contenus vidéo : une présentation de l’événement et un montage court adapté aux réseaux sociaux.',
        'overline' => 'Rym / Atelier RESPIRA',
        'videos' => [
            [
                'src' => 'assets/videos/respira/respira-evenement.mp4',
                'title' => 'L’atelier en images',
                'caption' => 'Une immersion dans l’ambiance et les activités de l’atelier RESPIRA.',
                'poster' => 'assets/images/projects/respira/respira-event.jpg'
            ],
            [
                'src' => 'assets/videos/respira/respira-reel.mp4',
                'title' => 'Création de contenu · format court',
                'caption' => 'Un format dynamique pour partager les temps forts de l’atelier sur les réseaux sociaux.',
                'poster' => 'assets/images/projects/respira/respira-brand-cover.png'
            ]
        ]
    ],
    [
        'id' => 'interview-capsule',
        'domain' => 'production-video',
        'sector' => '07 / Interview & création vidéo',
        'name' => 'Interview Capsule',
        'description' => 'Un format d’interview intime qui laisse place aux confidences.',
        'image' => 'assets/images/projects/interview-capsule/interview-cover-sb22.png',
        'context' => 'Une capsule vidéo pensée pour donner la parole aux invités, loin du format journalistique classique.',
        'objective' => 'Créer un espace de parole sincère, où les invités peuvent partager leur vécu et leurs émotions.',
        'intervention' => 'Présentation d’une interview capsule qui privilégie le récit personnel, sans montrer les questions posées.',
        'overline' => 'Interview / Capsule vidéo',
        'videos' => [
            [
                'src' => 'assets/videos/interview-capsule/interview-capsule.mp4',
                'title' => 'L’interview capsule',
                'caption' => 'Une parole libre et personnelle, au cœur du format.',
                'poster' => 'assets/images/projects/interview-capsule/interview-cover-sb22.png'
            ]
        ]
    ]
];

$rymInterview = __DIR__ . '/../assets/videos/respira/rym-interview.mp4';
if (is_file($rymInterview)) {
    foreach ($cases as &$case) {
        if ($case['id'] === 'atelier-respira') {
            $case['videos'][] = [
                'src' => 'assets/videos/respira/rym-interview.mp4',
                'title' => 'Interview de Rym',
                'caption' => 'La parole à Rym.',
                'poster' => 'assets/images/projects/respira/respira-brand-cover.png'
            ];
            break;
        }
    }
    unset($case);
}
return $cases;
