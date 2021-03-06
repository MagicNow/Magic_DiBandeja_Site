<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FornecedoresSite extends Model
{
    protected $table = 'fornecedores_site';
    protected $fillable = ['id', 'razao_social', 'nome_fantasia', 'especialidade', 'url', 'cotacao', 'nome_contato', 'telefone', 'telefone2', 'endereco', 'bairro', 'cidade', 'cep', 'estado', 'pais', 'numero', 'complemento'];
}
