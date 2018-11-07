<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = ['mesa_id', 'atendente', 'total_gasto', 'tempo_minutos_permanencia'];
}

