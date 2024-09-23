<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vereador extends Model
{
    use HasFactory;

    protected $table = 'vereadores';

    protected $fillable = [
        'nome',
        'partido',
        'bio',
        'foto',
    ];

    // Relacionamentos
    public function mesaDiretora()
    {
        return $this->hasOne(MesaDiretora::class);
    }
}
