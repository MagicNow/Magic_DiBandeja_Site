<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Cidades extends Authenticatable
{
    public function estado()
    {
        return $this->belongsTo('App\Models\Estados');
    }
}
