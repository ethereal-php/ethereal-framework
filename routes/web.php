<?php

use Ethereal\Support\Facades\Route;
use Ethereal\Support\Facades\View;

Route::get('/', function () {
    return View::render('home');
});
