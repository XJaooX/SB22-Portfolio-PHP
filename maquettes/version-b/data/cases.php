<?php
return [
    ['id' => 'kuba-home','domain' => 'social-media','sector' => '01 / Aménagement intérieur','name' => 'Kuba Home','description' => 'Une vitrine digitale premium pour les créations de Kuba Home.','image' => 'assets/images/projects/kuba/kuba-whatsapp/kuba-carousel-cover.jpg'],
    ['id' => 'plumes-social','domain' => 'social-media','sector' => '02 / Édition','name' => 'Plumes de Cœur Éditions','description' => 'Faire connaître la maison d’édition et son univers sur les réseaux sociaux.','image' => 'assets/images/projects/plumes-de-coeur/plumes-social/sortie-polar.jpg'],
    ['id' => 'plumes-signaletique','domain' => 'design-graphique','sector' => '03 / Édition','name' => 'Plumes de Cœur Éditions','description' => 'Une identité éditoriale visible aussi dans l’espace physique.','image' => 'assets/images/projects/plumes-de-coeur/plumes-2.jpg'],
    ['id' => 'kid-fitness-lexy','domain' => 'meta-ads','sector' => '04 / Activités pour enfants','name' => 'Kid Fitness Lexy','description' => 'Promouvoir les journées portes ouvertes et encourager les inscriptions.','image' => 'assets/images/projects/kid-fitness/kid-fitness-poster.jpg'],
    ['id' => 'youplaboom-meta','domain' => 'meta-ads','sector' => '05 / Petite enfance','name' => 'Youplaboom','description' => 'Développer la visibilité locale de la microcrèche.','image' => 'assets/images/projects/youplaboom/youplaboom-meta-cover.jpg'],

    [
        'id' => 'respira-evenement',
        'domain' => 'production-video',
        'sector' => '06 / Bien-être & événementiel',
        'name' => 'RESPIRA',
        'description' => 'Une expérience de bien-être racontée à travers trois formats vidéo.',
        'image' => (is_file(__DIR__ . '/../assets/images/projects/respira/respira-brand-cover.png') ? 'assets/images/projects/respira/respira-brand-cover.png' : 'assets/images/projects/respira/respira-cover.jpg'),
        'context' => 'Un événement autour de la détente et des expériences de bien-être.',
        'objective' => 'Retranscrire l’ambiance de l’événement et mettre en valeur les moments vécus par les participants.',
        'intervention' => 'Présentation de trois contenus audiovisuels : un témoignage face caméra, une immersion dans l’événement et un Reel récapitulatif.',
        'overline' => 'Bien-être / Événement',
        'videos' => [
            [
                'src' => 'assets/videos/respira/respira-interview.mp4',
                'title' => 'Témoignage',
                'caption' => 'Un échange face caméra sur l’expérience RESPIRA.',
                'poster' => 'assets/images/projects/respira/respira-interview.jpg'
            ],
            [
                'src' => 'assets/videos/respira/respira-evenement.mp4',
                'title' => 'Immersion dans l’événement',
                'caption' => 'Les coulisses, l’ambiance et les activités proposées lors de la rencontre.',
                'poster' => 'assets/images/projects/respira/respira-event.jpg'
            ],
            [
                'src' => 'assets/videos/respira/respira-reel.mp4',
                'title' => 'Reel récapitulatif',
                'caption' => 'Un montage court des temps forts de l’événement.',
                'poster' => (is_file(__DIR__ . '/../assets/images/projects/respira/respira-brand-cover.png') ? 'assets/images/projects/respira/respira-brand-cover.png' : 'assets/images/projects/respira/respira-cover.jpg')
            ]
        ]
    ],
];
