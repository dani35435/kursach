<?php

namespace Controller;

use Src\Auth\Auth;
use Src\Request;
use Src\View;
use Model\Users;
use Model\Pizzas;
use Model\Menuses;


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
            app()->route->redirect('/profile'); //изменить на main_page
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
        $Users = Users::all();
        return new View('site.profile', ['Users' => $Users]);
    }


//главная страница
    public function main_page(): string
    {
        return new View('site.main_page');
    }

//страница Пиццы
    public function pizza(Request $request): string

    {
        $pizzas = Pizzas::all();
        return new View('site.pizza', ['pizzas' => $pizzas]);
    }

//страница Меню
    public function menu(Request $request): string

    {
        $menus = Menuses::all();
        return new View('site.menu', ['menus'=>$menus]);
    }


// Добавление

    public function pizza_add(Request $request): string
    {
        if ($request->method === 'POST' && Pizzas::create($request->all())) {
            app()->route->redirect('/menu');
        }
        return new View('site.pizza_add');
    }
}


