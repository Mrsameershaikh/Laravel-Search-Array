<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Book extends Model
{
    use HasFactory;
    protected $table="books";
    protected $perimaryKey="id";
    protected $casts=[
        'books'=>'array'
    ];

    
}