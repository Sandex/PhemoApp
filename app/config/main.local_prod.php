<?php

return array_replace_recursive(require(__DIR__ . '/main.php'), [
    'database' => [
        'host'     => 'prod',
        'username' => 'prod_user',
        'password' => 'prod_secret',
        'dbname'   => 'phemo',
    ],
]);
