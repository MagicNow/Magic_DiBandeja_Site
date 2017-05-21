<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fornecedores extends Model {

    protected $fillable = ['nome', 'telefone', 'endereco', 'bairro', 'cidade', 'site', 'cep', 'estado', 'pais', 'razao_social', 'url', 'especialidade', 'cotacao', 'complemento'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'fornecedores';

    public function distribuidores()
    { 
        return $this->belongsToMany('App\Models\Distribuidores', 'fornecedores_distribuidores', 'fornecedor_id', 'distribuidor_id')->withPivot('nota');
    }
}
