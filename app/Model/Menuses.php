<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menuses extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'pizzas_id',
        'drinks_id',
        'snacks_id',
        'combos_id',
    ];

}