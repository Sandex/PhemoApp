<?php

require_once __DIR__ . '/../app/AppKernel.php';

$kernel = new Phemo\AppKernel('prod');
$kernel->handle();
