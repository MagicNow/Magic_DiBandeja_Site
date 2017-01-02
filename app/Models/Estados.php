<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Estados extends Authenticatable
{
    public function cidades()
    {
        return $this->hasMany('App\Models\Estados');
    }
}
