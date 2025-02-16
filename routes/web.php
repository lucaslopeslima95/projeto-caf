<?php

use App\Http\Controllers\PerguntaController;
use App\Http\Controllers\ProfileController;
use App\Models\Pessoa;
use App\Models\Questionario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware('auth')->group(function () {

    Route::resources([
        'usuario'=>ProfileController::class,
        'pergunta'=>PerguntaController::class,
        'pessoa'=>Pessoa::class,
        'questionario'=>Questionario::class
    ]);


    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::get('/logout', function () {
        Auth::logout();
        return redirect('/');
    })->name('logout');
});

require __DIR__.'/auth.php';
