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
            'host' => 'smtp.alwaysdata.com',
            'username' => 'tonemail@tondomaine.com', // mail alwaysdata
            'password' => 'tonmotdepasse', // Mot de passe alwaysdata
            'port' => 587,
            'encryption' => 'tls',
        ],
    ],
];
