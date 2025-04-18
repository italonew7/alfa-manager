<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cupons extends Model
{
    use HasFactory;

    protected $table = 'cupons';

    protected $fillable = [
        'cupom',
        'desconto',
        'quantidade',
        'minimo',
        'maximo',
    ];
}
