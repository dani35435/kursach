<?php

namespace Src\Auth;

use Src\Session;

class Auth
{
    //Свойство для хранения любого класса, реализующего интерфейс IdentityInterface
    private static IdentityInterface $users;

    //Инициализация класса пользователя
    public static function init(IdentityInterface $users): void
    {
        self::$users = $users;
        if (self::users()) {
            self::login(self::users());
        }
    }

    //Вход пользователя по модели
    public static function login(IdentityInterface $users): void
    {
        self::$users = $users;
        Session::set('id', self::$users->getId());
    }

    //Аутентификация пользователя и вход по учетным данным
    public static function attempt(array $credentials): bool
    {
        if ($users = self::$users->attemptIdentity($credentials)) {
            self::login($users);
            return true;
        }
        return false;
    }

    //Возврат текущего аутентифицированного пользователя
    public static function users()
    {
        $id = Session::get('id') ?? 0;
        return self::$users->findIdentity($id);
    }

    //Проверка является ли текущий пользователь аутентифицированным
    public static function check(): bool
    {
        if (self::users()) {
            return true;
        }
        return false;
    }

    //Выход текущего пользователя
    public static function logout(): bool
    {
        Session::clear('id');
        return true;
    }

}
