<?php

use App\Http\Controllers\Dashboard\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimerControlador;
use App\Http\Controllers\SegundoControlador;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', [PrimerControlador::class, 'index']);
Route::get('test2', [SegundoControlador::class, 'index']);
Route::get('otro/{post?}/{otro?}', [PrimerControlador::class, 'otro']);

Route::resource('post', PostController::class);