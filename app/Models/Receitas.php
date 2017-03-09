<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receitas extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'receitas';


    public function ingredientes()
    { 
        return $this->belongsToMany('App\Models\Ingredientes','receitas_ingredientes','receita_id','ingrediente_id');
    }

  

}
