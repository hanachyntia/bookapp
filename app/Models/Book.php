<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

Class Book extends Model
{
    protected $fillable = ['title', 'description', 'author'];
    // private $id = 'id';
}
