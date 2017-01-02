<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientesSite extends Model
{
    protected $table = 'clientes_site';
    protected $fillable = ['id', 'pessoa', 'nome', 'email', 'razao_social', 'telefone', 'telefone2', 'endereco', 'bairro', 'cidade', 'cep', 'estado', 'pais', 'url','numero','complemento'];

    
}
