<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProdutoEspecial extends Model
{
    use HasFactory;

    // The table associated with the model.
    protected $table = 'produtos_especiais';

    // The attributes that are mass assignable.
    protected $fillable = [
        'nome',
        'descricao',
        'coluna',
        'gasto',
        'preco',
    ];

    // The attributes that should be cast to native types.
    protected $casts = [
        'gasto' => 'decimal:2',
        'preco' => 'decimal:2',
    ];

    // Any relationships if needed
    // Example: If ProdutoEspecial belongs to a User, you would define it like this
    // public function user() {
    //     return $this->belongsTo(User::class);
    // }
}
