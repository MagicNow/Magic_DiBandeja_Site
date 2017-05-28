<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cardapios extends Model {

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'cardapios';

    public function cliente()
    {
        return $this->hasOne('App\Models\Clientes', 'id', 'clientes_id');
    }

    public function receitas()
    {
        return $this->belongsToMany('App\Models\Receitas', 'receita_cardapios', 'cardapio_id', 'receita_id')->withPivot("dia", "refeicao_id");
    }
}
