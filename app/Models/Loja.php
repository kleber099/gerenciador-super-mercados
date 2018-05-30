<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
    protected $fillable = ['nome'];

    public function produtos()
    {
        return $this->belongsToMany('App\Models\Produto', 'quantidade');
    }

    public function lancamentos()
    {
        return $this->hasMany('App\Models\Lacamento');
    }
}
