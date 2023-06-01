<?php

namespace Controller;

use Src\Auth\Auth;
use Src\Request;
use Src\View;
use Model\Users;

class Site
{
//регистрация
    public function signup(Request $request): string
    {
        if ($request->method === 'POST' && Users::create($request->all())) {
            app()->route->redirect('/main_page');
        }
        return new View('site.signup',);
    }

// вход

    public function login(Request $request): string
    {
        //Если просто обращение к странице, то отобразить форму
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        //Если удалось аутентифицировать пользователя, то редирект
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/profile');
        }
        //Если аутентификация не удалась, то сообщение об ошибке
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

// выход

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/main_page');
    }

// профиль

    public function profile(Request $request): string

    {
        $users = users::all();
        return new View('site.profile', ['users' => $users]);
    }

    public function main_page(): string
    {
        return new View('site.main_page', []);
    }

}


