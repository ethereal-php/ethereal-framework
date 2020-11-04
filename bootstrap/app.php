<?php

$app = new Ethereal\Foundation\Application(
  dirname(__DIR__)
);

$app->bind(
  Ethereal\Foundation\Http\Kernel::class, 
  App\Http\Kernel::class
);

$app->bind(
  Ethereal\Foundation\Console\Kernel::class,
  App\Console\Kernel::class
);

return $app;