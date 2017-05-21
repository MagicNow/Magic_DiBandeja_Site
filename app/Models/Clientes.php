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
        'tipo','nome','endereco','numero','bairro','cidade','pais','cep','image','telefone','email','url'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'clientes';

}
