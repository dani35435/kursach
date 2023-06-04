<?php

use Src\Route;

Route::add('GET', '/main_page', [Controller\Site::class, 'main_page']);
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add('GET', '/profile', [Controller\Site::class, 'profile']);
Route::add('GET', '/pizza', [Controller\Site::class, 'pizza']);
Route::add(['GET', 'POST'], '/pizza_add', [Controller\Site::class, 'pizza_add']);
Route::add('GET', '/snacks', [Controller\Site::class, 'snacks']);
Route::add(['GET', 'POST'], '/snacks_add', [Controller\Site::class, 'snacks_add']);
Route::add('GET', '/drinks', [Controller\Site::class, 'drinks']);
Route::add(['GET', 'POST'], '/drinks_add', [Controller\Site::class, 'drinks_add']);
Route::add('GET', '/stocks', [Controller\Site::class, 'stocks']);
Route::add(['GET', 'POST'], '/stocks_add', [Controller\Site::class, 'stocks_add']);
Route::add(['GET', 'POST'], '/delete', [Controller\Site::class, 'delete']);
