<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nome',
        'tipo',
        'preco_custo',
        'preco_venda',
        'lote',
        'data_aquisicao',
        'data_venda',
        'fornecedor',
        'validade'
    ];
}
