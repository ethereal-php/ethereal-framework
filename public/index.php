<?php

define('REQUEST_START', microtime(true));

require __DIR__ . '/../vendor/autoload.php';

$app = require __DIR__ . '/../bootstrap/app.php';

$kernel = $app->make(
  Ethereal\Foundation\Http\Kernel::class
);

var_dump($app);
