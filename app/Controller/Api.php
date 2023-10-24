<?php

namespace Controller;

use Illuminate\Database\Capsule\Manager as DB;
use Model\Combos;
use Model\Pizzas;
use Model\Users;
use Src\Auth\Auth;
use Src\Request;
use Src\View;
use Src\FileUploader;

class Api
{
    public function index(): void
    {
        $Pizzas = Pizzas::all()->toArray();

        (new View())->toJSON($Pizzas);
    }

    public function echo(Request $request): void
    {
        (new View())->toJSON($request->all());
    }


    //функция регистрации api
    public function signup(Request $request)
    {
        if ($request->method === 'POST') {

            $users = new Users();
            $users->id = $request->id;
            $users->name = $request->name;
            $users->email = $request->email;
            $users->password = $request->password;
            $users->privilege = 1;

            if ($users->save()) {
                (new View())->toJSON($request->all());
            }
        }
    }

    //функция логин api
    public function login(Request $request)
    {
        if ($request->method === 'POST') {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                $users = Auth::user();
                $token = Auth::generateCSRF();
                (new View())->toJSON(['users' => $users, 'token' => $token, 'message' => 'Вы успешно вошли']);
            } else (new View())->toJSON(['message' => 'Такого пользователя не существует']);
        }
    }

    public function logout(Request $request){
        if(Auth::user()){
            Auth::logout();
            (new View())->toJSON(['message' => 'Вы успешно вышли']);
        } else (new View())->toJSON(['message' => 'Вы не в системе']);
    }

//функция добавления api
    public function pizza_add(Request $request)
    {
        $fileUploader = new FileUploader($_FILES['photo']);
        $destination = 'uploads';
        $newFileName = $fileUploader->upload($destination);

        $photo = $destination . '/' . $newFileName;

        $pizza = new Pizzas();
        $pizza->id = $request->id;
        $pizza->title = $request->title;
        $pizza->description = $request->description;
        $pizza->photo = $photo;
        $pizza->price = $request->price;

        if ($pizza->save()) {
            (new View())->toJSON($request->all());
        }
    }

    public function search(Request $request)
    {
        $search1 = $request->search1;
        $pizzas = DB::table('pizzas')
            ->where('pizzas.title', 'LIKE', '%' . $search1 . '%')
            ->get()
            ->toArray();
        (new View())->toJSON($pizzas);
    }

    public function delete_pizza($id)
    {
        if (Pizzas::find($id)) {
            $pizza = Pizzas::find($id);
            if ($pizza->delete()) {
                (new View())->toJSON(['users' => $pizza, 'message' => 'Успешно удалено']);
            } else (new View())->toJSON(['message' => 'Удаление не было произведено']);
        } else (new View())->toJSON(['message' => 'Такой пиццы у нас нет']);
    }

    public function change_pizza($id, Request $request)
    {
        if (Pizzas::find($id)) {
            $pizza = Pizzas::find($id);

            $fileUploader = new FileUploader($_FILES['photo']);
            $destination = 'uploads';
            $newFileName = $fileUploader->upload($destination);

            $photo = $destination . '/' . $newFileName;

            $pizza->title = $request->title;
            $pizza->description = $request->description;
            $pizza->photo = $photo;
            $pizza->price = $request->price;
            if ($pizza->save()) {
                (new View())->toJSON(['pizza' => $pizza, 'message' => 'Успешно изменено']);
            }
        } else (new View())->toJSON(['message' => 'Ничего не найдено']);
    }

    public function sorted(Request $request)
    {
        $pizzas = DB::table('pizzas')
            ->orderBy('pizzas.price', 'desc')
            ->get()
            ->toArray();
        (new View())->toJSON($pizzas);
    }
    public function main_page(): void
    {
        $Combos = Combos::all()->toArray();

        (new View())->toJSON($Combos);
    }

}
