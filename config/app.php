<?php

return [
  'name' => env('APP_NAME', 'Ethereal'),

  'env' => env('APP_ENV', 'web'),

  'debug' => env('APP_DEBUG', false),

  'timestamp' => 'UTC',
  
  'alias' => [
    App::class => Ethereal\Support\Facacdes\App::class,
    DB::class => Ethereal\Support\Facacdes\DB::class,
    Route::class => Ethereal\Support\Facacdes\Route::class,
    View::class => Ethereal\Support\Facacdes\View::class,
  ],
  
  'providers' => [
    Ethereal\Database\DatabaseServiceProvider::class,
    Ethereal\Routing\RoutingServiceProvider::class,
    Ethereal\View\ViewServiceProvider::class,
  ],
  
];