<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'clientes';

}
