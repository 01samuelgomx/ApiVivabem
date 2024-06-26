<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CepController;
use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cep', [CepController::class, 'index'])->name('cep');

