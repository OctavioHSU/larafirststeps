<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimerControlador;
use App\Http\Controllers\SegundoControlador;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', [PrimerControlador::class, 'index']);
Route::get('test2', [SegundoControlador::class, 'index']);