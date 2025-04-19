<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PacienteController; // Importa el controlador de Paciente
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rutas para el manejo de pacientes
    Route::resource('pacientes', PacienteController::class);
});

require __DIR__.'/auth.php';