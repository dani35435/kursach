<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Combos extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'title',
        'description',
        'photo',
        'price',
    ];
}