<?php

return array_replace_recursive(require(__DIR__ . '/main.php'), [
    'database' => [
        'adapter'  => 'mysql', // (mysql|postgresql)
        'host'     => 'localhost',
        'username' => 'root',
        'password' => 'root',
        'dbname'   => 'phemo',
    ],
]);
