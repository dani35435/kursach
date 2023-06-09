<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stocks extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'image',
        'title',
        'description',
    ];
}