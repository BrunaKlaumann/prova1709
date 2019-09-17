<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contas_receber extends Model
{
    protected $fillable = ['id', 'nome', 'valor'];
}
