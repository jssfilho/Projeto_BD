<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    public function endereco()
    {
        return $this->hasOne('App\Models\Endereco');
    }
}
