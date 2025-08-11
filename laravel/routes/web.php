<?php
/// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;

Route::get('/', [PacienteController::class, 'home'])->name('home');

Route::get('/cadastro', [PacienteController::class, 'form'])->name('pacientes.form');
Route::post('/cadastro', [PacienteController::class, 'store'])->name('pacientes.store');
Route::get('/lista', [PacienteController::class, 'lista'])->name('pacientes.lista');