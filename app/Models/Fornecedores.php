<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fornecedores extends Model {

    protected $fillable = ['nome_fantasia', 'telefone', 'endereco', 'bairro', 'cidade', 'site', 'cep', 'estado', 'pais', 'razao_social', 'url', 'especialidade', 'cotacao', 'complemento'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'fornecedores';

    public function distribuidores()
    { 
        return $this->belongsToMany('App\Models\Distribuidores', 'fornecedores_distribuidores', 'distribuidor_id', 'fornecedor_id');
    }

    // public function receitas()
    // { 
    //     return $this->belongsToMany('App\Receitas','receitas_ingredientes','receita_id','ingrediente_id');
    // }

    // public static function getList()
    // {
    //     return static::lists('ingrediente', 'id');
    // }

}
