<?php

use Src\Route;

Route::add('GET', '/', [Controller\Api::class, 'index']);
Route::add('POST', '/echo', [Controller\Api::class, 'echo']);
Route::add('POST', '/signup', [Controller\Api::class, 'signup']);
Route::add('POST', '/login', [Controller\Api::class, 'login']);
Route::add('POST', '/logout', [Controller\Api::class, 'logout']);
Route::add('POST', '/search', [Controller\Api::class, 'search']);
Route::add('DELETE', '/delete_pizza/{id}', [Controller\Api::class, 'delete_pizza']);
Route::add('POST', '/change_pizza/{id}', [Controller\Api::class, 'change_pizza']);
Route::add('POST', '/sorted', [Controller\Api::class, 'sorted']);
Route::add('GET', '/main_page', [Controller\Api::class, 'sorted']);
Route::add('POST', '/pizza_add', [Controller\Api::class, 'pizza_add']);