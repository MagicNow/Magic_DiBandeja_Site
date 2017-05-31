<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parceiros extends Model
{
    protected $table = 'parceiros';
    
    protected $fillable = ['id', 'nome', 'apelido', 'profissao', 'url', 'email', 'telefone', 'endereco', 'bairro', 'cidade', 'cep', 'estado', 'pais','numero','complemento','image'];

    public static function getList()
    {
        return static::pluck('nome', 'id');
    }

    public function receitas()
    { 
        return $this->hasMany('App\Models\Receitas');
    }
}
