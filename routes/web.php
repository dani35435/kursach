<?php

use Src\Route;

Route::add('GET', '/main_page', [Controller\Site::class, 'main_page']);
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);