<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Evento;

class EventoController extends Controller
{
    public function index()
    {
        return Evento::where('data_hora', '>=', now())->orderBy('data_hora')->get();
    }
}
