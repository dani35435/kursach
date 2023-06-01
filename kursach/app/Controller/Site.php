<?php

namespace Controller;

use Src\Auth\Auth;
use Src\Request;
use Src\View;


class Site
{
    public function index(Request $request): string
    {
        $posts = Post::where('id', $request->id)->get();
        return (new View())->render('site.post', ['posts' => $posts]);
    }

//регистрация

    public function signup(Request $request): string
    {
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/hello');
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
        app()->route->redirect('/hello');
    }

// профиль

    public function profile(Request $request): string

    {
        $users = user::all();
        return new View('site.profile', ['users' => $users]);
    }

    public function hello(): string
    {
        return new View('site.hello', []);
    }

}


