<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Vereador;

class VereadorController extends Controller
{
    public function index()
    {
        return Vereador::all();
    }
}
