<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lancamento extends Model
{
    protected $fillable = ['chegada', 'valor'];

    public function lancamentos()
    {
        return $this->hasMany('App\Models\Loja');
    }
}
