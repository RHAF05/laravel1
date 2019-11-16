<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table="productos";
    protected $fillable=["codigo","nombre","precio"];
    public $timestamps = false;
}
