<?php

namespace Controller;

use Illuminate\Database\Capsule\Manager as DB;
use Model\Combos;
use Model\Drinks;
use Model\Pizzas;
use Model\Snacks;
use Model\Stocks;
use Model\Users;
use Src\Auth\Auth;
use Src\Request;
use Src\View;
use Src\FileUploader;


class Admin
{
    //регистрация
    public function signup(Request $request): string
    {
        if ($request->method === 'POST' && Users::create($request->all())) {
            app()->route->redirect('/main_page');
        }
        return new View('site.signup',);
    }

    // Добавление пиццы

    public function pizza_add(Request $request): string
    {
        $Pizzas = Pizzas::all();

        if ($request->method === 'POST') {
            $fileUploader = new FileUploader($_FILES['photo']);

            $destination = 'uploads';

            $newFileName = $fileUploader->upload($destination);
            if (DB::table('pizzas')->insert([
                'title' => $_POST['title'],
                'description' => $_POST['description'],
                'price' => $_POST['price'],
                'photo' => $destination . '/' . $newFileName
            ])) {
                app()->route->redirect('/pizza');
            }

        }
        return (new View())->render('site.pizza_add', ['Pizzas' => $Pizzas,]);
    }

    //добавление закусок

    public function snacks_add(Request $request): string
    {
        $Snacks = Snacks::all();

        if ($request->method === 'POST') {
            $fileUploader = new FileUploader($_FILES['photo']);

            $destination = 'uploads';

            $newFileName = $fileUploader->upload($destination);
            if (DB::table('snacks')->insert([
                'title' => $_POST['title'],
                'description' => $_POST['description'],
                'price' => $_POST['price'],
                'photo' => $destination . '/' . $newFileName
            ])) {
                app()->route->redirect('/snacks');
            }

        }
        return (new View())->render('site.snacks_add', ['Snacks' => $Snacks,]);
    }

    //добавление напитков
    public function drinks_add(Request $request): string
    {
        $Drinks = Drinks::all();

        if ($request->method === 'POST') {
            $fileUploader = new FileUploader($_FILES['photo']);

            $destination = 'uploads';

            $newFileName = $fileUploader->upload($destination);
            if (DB::table('drinks')->insert([
                'title' => $_POST['title'],
                'description' => $_POST['description'],
                'price' => $_POST['price'],
                'photo' => $destination . '/' . $newFileName
            ])) {
                app()->route->redirect('/drinks');
            }

        }
        return (new View())->render('site.drinks_add', ['Drinks' => $Drinks,]);
    }


//добавление акций

    public function stocks_add(Request $request): string
    {
        $Stocks = Stocks::all();

        if ($request->method === 'POST') {
            $fileUploader = new FileUploader($_FILES['photo']);

            $destination = 'uploads';

            $newFileName = $fileUploader->upload($destination);
            if (DB::table('stocks')->insert([
                'title' => $_POST['title'],
                'description' => $_POST['description'],
                'photo' => $destination . '/' . $newFileName
            ])) {
                app()->route->redirect('/stocks');
            }

        }
        return (new View())->render('site.stocks_add', ['Stocks' => $Stocks,]);
    }
    //добавление комбо
    public function combo_add(Request $request): string
    {

        $Combos = Combos::all();

        if ($request->method === 'POST') {
            $fileUploader = new FileUploader($_FILES['photo']);

            $destination = 'uploads';

            $newFileName = $fileUploader->upload($destination);
            if (DB::table('combos')->insert([
                'title' => $_POST['title'],
                'description' => $_POST['description'],
                'price' => $_POST['price'],
                'photo' => $destination . '/' . $newFileName
            ])) {
                app()->route->redirect('/main_page');
            }

        }
        return (new View())->render('site.combo_add', ['Combos' => $Combos,]);
    }


}