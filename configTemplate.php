<!-- A renommer en config.php -->
<?php
return [
    'smtp' => [
        'local' => [
            'host' => 'smtp.gmail.com',
            'username' => 'mail@gmail.com', // mail
            'password' => '', // Mot de passe d'application Gmail
            'port' => 587,
            'encryption' => 'tls',
        ],
        'production' => [
            'host' => 'smtp-nomUtilisateur.alwaysdata.net',
            'username' => 'nomUtilisateur@alwaysdata.net', // mail alwaysdata (On peut configurer une rediraction sur le site)
            'password' => 'motdepasse',
            'port' => 587,
            'encryption' => 'tls',
        ],
    ],
];
