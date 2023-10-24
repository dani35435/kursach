<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Src\Auth\IdentityInterface;

class Users extends Model implements IdentityInterface
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'email',
        'number',
        'birthday',
        'password',
        'privilege',
    ];

    protected static function booted()
    {
        static::created(function ($users) {
            $users->password = md5($users->password);
            $users->save();
        });
    }

    //Выборка пользователя по первичному ключу
    public function findIdentity(int $id)
    {
        return self::where('id', $id)->first();
    }

    //Возврат первичного ключа
    public function getId(): int
    {
        return $this->id;
    }

    //Возврат аутентифицированного пользователя
    public function attemptIdentity(array $credentials)
    {
        return self::where(['email' => $credentials['email'],
            'password' => md5($credentials['password'])])->first();
    }

}