<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

class Noticia extends Model
{
    use HasFactory;

    protected $table = 'noticias';

    protected $fillable = [
        'titulo',
        'conteudo',
        'imagem',
    ];

    protected $appends = ['image_url'];

    /**
     * Acessor para obter a URL completa da imagem.
     *
     * @return string
     */
    public function getImageUrlAttribute()
    {
        return $this->imagem ? Storage::url($this->imagem) : null;
    }
}
