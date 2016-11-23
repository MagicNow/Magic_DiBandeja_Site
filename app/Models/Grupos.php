<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupos extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descricao', 'created_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'grupos';


    // public function receitas()
    // { 
    //     return $this->belongsToMany('App\Receitas','receitas_ingredientes','receita_id','ingrediente_id');
    // }

    // public static function getList()
    // {
    //     return static::lists('ingrediente', 'id');
    // }

}
