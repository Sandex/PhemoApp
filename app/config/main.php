<?php

return [
    'framework' => [
        'autoloadDirs' => ['Controller', 'Entity', 'Service', 'Widget'],
        'baseUri'      => '/',
        'templating'   => [
            'baseView' => '/Resources/views/',
            'engines'  => [
                '.html.php' => 'Phalcon\Mvc\View\Engine\Php',
                '.volt'     => 'Phalcon\Mvc\View\Engine\Volt',
            ],
        ],
    ],
    'database'  => [
        'adapter'  => 'mysql',
        'host'     => 'localhost',
        'username' => 'root',
        'password' => 'secret',
        'dbname'   => 'phemo',
    ],
];
