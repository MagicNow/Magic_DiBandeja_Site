<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Distribuidores extends Model {

    protected $fillable = ['nome', 'url', 'endereco', 'telefone', 'delivery', 'venda_online', 'nota'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'distribuidores';

    public function fornecedores()
    { 
        return $this->belongsToMany('App\Models\Fornecedores', 'fornecedores_distribuidores', 'ingrediente_id', 'fornecedor_id')
            ->withPivot("custo", "medida");
    }
}
