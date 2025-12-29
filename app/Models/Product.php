<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'image'];
    public $timestamps = false; // Important if your table has no created_at, updated_at
}
