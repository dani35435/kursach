<?php

namespace Controller;

use Illuminate\Database\Capsule\Manager as DB;
use Model\Drinks;
use Model\Combos;
use Model\Snacks;
use Src\Auth\Auth;
use Src\Request;
use Src\View;
use Model\Users;
use Model\Pizzas;
use Model\Stocks;


class Site
{
// вход
    public function login(Request $request): string
    {
        if ($request->method === 'GET') {
            return new View('site.login');
        }

        if (Auth::attempt($request->all())) {
            app()->route->redirect('/main_page');
        }

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
        $Combos = Combos::all();
        if (isset($_GET['del'])) {
            $id = $_GET['del'];
            $Combos = DB::table('combos')
                ->where('combos.id', $id)
                ->delete();
            app()->route->redirect('/main_page');
        }
        return (new View())->render('site.main_page', ['Combos' => $Combos]);
    }


//страница Пиццы
    public function pizza(Request $request): string
    {
        $Pizzas = Pizzas::all();
        if (isset($_GET['del'])) {
            $id = $_GET['del'];
            $Pizzas = DB::table('pizzas')
                ->where('pizzas.id', $id)
                ->delete();
            app()->route->redirect('/pizza');
        }
        if (isset($_GET['sort']) == 'price_asc') {
            $Pizzas = DB::table('pizzas')
                ->orderBy('pizzas.price', 'asc')
                ->get();
        } elseif (isset($_GET['sort']) == 'price_desc') {
            $Pizzas = DB::table('pizzas')
                ->orderBy('pizzas.price', 'desc')
                ->get();
        }
        return (new View())->render('site.pizza', ['Pizzas' => $Pizzas]);
    }

//страница Закусок
    public function snacks(): string
    {
        $Snacks = Snacks::all();
        if (isset($_GET['del'])) {
            $id = $_GET['del'];
            $Snacks = DB::table('snacks')
                ->where('snacks.id', $id)
                ->delete();
            app()->route->redirect('/snacks');
        }
        if (isset($_GET['sort']) == 'price_asc') {
            $Snacks = DB::table('snacks')
                ->orderBy('snacks.price', 'asc')
                ->get();
        } elseif (isset($_GET['sort']) == 'price_desc') {
            $Snacks = DB::table('snacks')
                ->orderBy('snacks.price', 'desc')
                ->get();
        }
        return (new View())->render('site.snacks', ['Snacks' => $Snacks]);
    }

//страница напитков
    public function drinks(): string
    {
        $Drinks = Drinks::all();
        if (isset($_GET['del'])) {
            $id = $_GET['del'];
            $Drinks = DB::table('drinks')
                ->where('drinks.id', $id)
                ->delete();
            app()->route->redirect('/drinks');
        }
        if (isset($_GET['sort']) == 'price_asc') {
            $Drinks = DB::table('drinks')
                ->orderBy('drinks.price', 'asc')
                ->get();
        } elseif (isset($_GET['sort']) == 'price_desc') {
            $Drinks = DB::table('drinks')
                ->orderBy('drinks.price', 'desc')
                ->get();
        }
        return (new View())->render('site.drinks', ['Drinks' => $Drinks]);
    }

//страница акций
    public function stocks(): string
    {
        $Stocks = Stocks::all();
        if (isset($_GET['del'])) {
            $id = $_GET['del'];
            $Stocks = DB::table('stocks')
                ->where('stocks.id', $id)
                ->delete();
            app()->route->redirect('/stocks');

        }
        return (new View())->render('site.stocks', ['Stocks' => $Stocks]);
    }

//поиск
    public function search(Request $request)
    {
        $search1 = $request->search1;

        $pizzas = DB::table('pizzas')
            ->select('pizzas.*')
            ->where('pizzas.title', 'LIKE', "%" . $search1 . "%")
            ->get();

        $drinks = DB::table('drinks')
            ->select('drinks.*')
            ->where('drinks.title', 'LIKE', "%" . $search1 . "%")
            ->get();

        $snacks = DB::table('snacks')
            ->select('snacks.*')
            ->where('snacks.title', 'LIKE', "%" . $search1 . "%")
            ->get();

        return (new View())->render('site.search', [
            'pizzas' => $pizzas,
            'drinks' => $drinks,
            'snacks' => $snacks,
        ]);
    }
}
