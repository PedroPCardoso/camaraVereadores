<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MesaDiretora extends Model
{
    use HasFactory;

    protected $table = 'mesa_diretora';

    protected $fillable = [
        'cargo',
        'vereador_id',
    ];

    // Relacionamentos
    public function vereador()
    {
        return $this->belongsTo(Vereador::class);
    }
}
