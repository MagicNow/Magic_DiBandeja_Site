<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model {

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'categorias';

    public static function getList()
    {
        return static::pluck('nome', 'id');
    }
}
