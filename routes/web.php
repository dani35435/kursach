<?php

use Src\Route;

//добавление
Route::add(['GET', 'POST'], '/pizza_add', [Controller\Admin::class, 'pizza_add']);
Route::add(['GET', 'POST'], '/snacks_add', [Controller\Admin::class, 'snacks_add']);
Route::add(['GET', 'POST'], '/drinks_add', [Controller\Admin::class, 'drinks_add']);
Route::add(['GET', 'POST'], '/stocks_add', [Controller\Admin::class, 'stocks_add']);
Route::add(['GET', 'POST'], '/combo_add', [Controller\Admin::class, 'combo_add']);

//станицы
Route::add('GET', '/main_page', [Controller\Site::class, 'main_page']);
Route::add('GET', '/pizza', [Controller\Site::class, 'pizza']);
Route::add('GET', '/snacks', [Controller\Site::class, 'snacks']);
Route::add('GET', '/drinks', [Controller\Site::class, 'drinks']);
Route::add('GET', '/stocks', [Controller\Site::class, 'stocks']);
Route::add('GET', '/profile', [Controller\Site::class, 'profile']);

//аутентификация
Route::add(['GET', 'POST'], '/signup', [Controller\Admin::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);

//поиск, фильтр
Route::add(['GET', 'POST'], '/search', [Controller\Site::class, 'search']);

