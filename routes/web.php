<?php

use Src\Route;

Route::add('GET', '/main_page', [Controller\Site::class, 'main_page']);
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add('GET', '/profile', [Controller\Site::class, 'profile']);
Route::add('GET', '/pizza', [Controller\Site::class, 'pizza']);
Route::add(['GET', 'POST'], '/pizza_add', [Controller\Site::class, 'pizza_add']);
Route::add('GET', '/menu', [Controller\Site::class, 'menu']);