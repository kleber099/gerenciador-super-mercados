<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Extrato extends Model
{
    protected $fillable = ['quantidade', 'pedido', 'data'];
}
