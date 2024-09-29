<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Vereador;

class VereadorController extends Controller
{
    public function index()
    {
        $vereadores = Vereador::all()->toArray();
        array_push($vereadores, Vereador::find(1));
        array_push($vereadores, Vereador::find(1));
        array_push($vereadores, Vereador::find(1));
        array_push($vereadores, Vereador::find(1));
        array_push($vereadores, Vereador::find(1));
        array_push($vereadores, Vereador::find(1));
        array_push($vereadores, Vereador::find(1));
        array_push($vereadores, Vereador::find(1));
        array_push($vereadores, Vereador::find(1));
        array_push($vereadores, Vereador::find(1));
        array_push($vereadores, Vereador::find(1));
        array_push($vereadores, Vereador::find(1));
        array_push($vereadores, Vereador::find(1));
        array_push($vereadores, Vereador::find(1));
        array_push($vereadores, Vereador::find(1));
        array_push($vereadores, Vereador::find(1));
        array_push($vereadores, Vereador::find(1));
        array_push($vereadores, Vereador::find(1));
        return $vereadores;
        #        return Vereador::all();
    }
}
