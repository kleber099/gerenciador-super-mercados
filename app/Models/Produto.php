<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome', 'codigo'];

    public function produtos()
    {
        return $this->belongsToMany('App\Models\Loja', 'quantidade');
    }
}
