<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evento extends Model
{
    use HasFactory;

    protected $table = 'eventos';

    protected $fillable = [
        'titulo',
        'descricao',
        'data_hora',
        'link',
        'recorrente',
    ];

    protected $casts = [
        'data_hora' => 'datetime',
        'recorrente' => 'boolean',
    ];
}
