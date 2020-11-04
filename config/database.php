<?php

return [
  'connection' => env('DB_CONNECTION', 'mysql'),
  
  'url' => env('DATABASE_URL'),

  'driver' =>[
    'mysql' => [
      'host' => env('DB_HOST', '127.0.0.1'),
      'port' => env('DB_PORT', 3306),
      'username' => env('DB_USERNAME', 'root'),
      'password' => env('DB_PASSWORD', ''),
      'database' => env('DB_DATABASE')
    ],
    
    'sqlite' => [
      'path' => database_path(env('DATABASE_URL', 'database.sqlite'))
    ],
  ],
  
  'options' => [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  ]
  
];