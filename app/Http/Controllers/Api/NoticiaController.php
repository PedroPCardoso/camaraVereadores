<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Noticia;

class NoticiaController extends Controller
{
    public function index()
    {
        return Noticia::orderBy('created_at', 'desc')->take(6)->get();
    }
}
