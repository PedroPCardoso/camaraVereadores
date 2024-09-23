<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\BannerController;
use App\Http\Controllers\Api\NoticiaController;
use App\Http\Controllers\Api\EventoController;
use App\Http\Controllers\Api\VereadorController;

Route::get('/banners', [BannerController::class, 'index']);
Route::get('/noticias', [NoticiaController::class, 'index']);
Route::get('/eventos', [EventoController::class, 'index']);
Route::get('/vereadores', [VereadorController::class, 'index']);
