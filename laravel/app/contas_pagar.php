<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contas_pagar extends Model
{
    protected $fillable = ['id', 'nome', 'valor'];
}
