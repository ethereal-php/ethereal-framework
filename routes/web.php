<?php

use Ethereal\Support\Facades\{
  Route, 
  View
};

Route::get('/', function() {
  return View::render('home');
});
