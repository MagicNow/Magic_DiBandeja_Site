<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredientes extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ingrediente', 'created_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'ingredientes';


    public function receitas()
    { 
        return $this->belongsToMany('App\Receitas', 'receitas_ingredientes', 'receita_id', 'ingrediente_id');
    }

    public static function getList()
    {
        return static::pluck('ingrediente', 'id');
    }

    public function caracteristicas()
    { 
        return $this->belongsToMany('App\Models\Caracteristicas', 'ingredientes_caracteristicas', 'ingrediente_id', 'caracteristica_id');
    }

    public function grupos()
    { 
        return $this->belongsToMany('App\Models\Grupos', 'ingredientes_grupos', 'ingrediente_id', 'grupo_id');
    }

    public function fornecedores()
    { 
        return $this->belongsToMany('App\Models\Fornecedores', 'fornecedores_ingredientes', 'ingrediente_id', 'fornecedor_id');
    }

    public function relacionados()
    { 
        return $this->belongsToMany('App\Models\Ingredientes', 'ingredientes_relacionados', 'ingrediente_id_to', 'ingrediente_id_to');
    }
}