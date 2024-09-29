<?php

namespace App\Http\Controllers\Api;

use App\Models\MesaDiretora;
use App\Http\Controllers\Controller;

class MesaDiretoraController extends Controller
{
    public function index()
    {
        $membros = MesaDiretora::with('vereador')->get();
        return response()->json($membros);
    }

    public function show($id)
    {
        $membro = MesaDiretora::findOrFail($id);
        return response()->json($membro);
    }
}
