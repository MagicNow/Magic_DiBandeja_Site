<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredientes_historico_revisao extends Model {

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'ingredientes_historico_revisao';

    public function cliente_site()
    { 
        return $this->belongsTo('App\Models\ClientesSite', 'clientes_site_id');
    }

    public function ingrediente()
    {
        return $this->belongsTo('App\Models\Ingredientes', 'ingredientes_id');
    }
}