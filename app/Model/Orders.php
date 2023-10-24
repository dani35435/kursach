<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'id',
        'users_id ',
        'cartID  ',

    ];
}