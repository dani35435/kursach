<?php

namespace Controller;

use Model\Drinks;
use Model\Snacks;
use Src\Auth\Auth;
use Src\Request;
use Src\View;
use Model\Users;
use Model\Pizzas;
use Model\Stocks;




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


    public function delete(Request $request): string
    {
//        if ($request->method === 'DELETE' && Pizzas::where('id', $request->id ?? 3)->get()) {
//            app()->route->redirect('/pizzas');
//        }
        return new View('site.delete');
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
    public function pizza(): string

    {
        $Pizzas = Pizzas::all();
        return new View('site.pizza', ['Pizzas' => $Pizzas]);
    }


//страница Закусок
    public function snacks(): string

    {
        $Snacks = Snacks::all();
        return new View('site.snacks', ['Snacks' => $Snacks]);
    }

//страница напитков

    public function drinks(): string

    {
        $Drinks = Drinks::all();
        return new View('site.drinks', ['Drinks' => $Drinks]);
    }

//страница акций
    public function stocks(): string

    {
        $Stocks = Stocks::all();
        return new View('site.stocks', ['Stocks' => $Stocks]);
    }

// Добавление пиццы

    public function pizza_add(Request $request): string
    {
        if ($request->method === 'POST' && Pizzas::create($request->all())) {
            app()->route->redirect('/pizza');
        }
        return new View('site.pizza_add');
    }

//добавление закусок

    public function snacks_add(Request $request): string
    {
        if ($request->method === 'POST' && Snacks::create($request->all())) {
            app()->route->redirect('/snacks');
        }
        return new View('site.snacks_add');
    }

//добавление напитков
    public function drinks_add(Request $request): string
    {
        if ($request->method === 'POST' && Drinks::create($request->all())) {
            app()->route->redirect('/drinks');
        }
        return new View('site.drinks_add');
    }

//добавление акций

    public function stocks_add(Request $request): string
    {
        if ($request->method === 'POST' && Stocks::create($request->all())) {
            app()->route->redirect('/stocks');
        }
        return new View('site.stocks_add');
    }

//удаление


}


