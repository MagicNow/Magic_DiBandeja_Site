<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unidades extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // 'titulo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'unidades';

}
