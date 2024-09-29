<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

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

    protected $appends = ['foto_url'];

    /**
     * Acessor para obter a URL completa da imagem.
     *
     * @return string
     */
    public function getFotoUrlAttribute()
    {
        return $this->foto ? Storage::url($this->foto) : null;
    }
    // Relacionamentos
    public function mesaDiretora()
    {
        return $this->hasOne(MesaDiretora::class);
    }
}
