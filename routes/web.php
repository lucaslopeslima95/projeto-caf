<?php


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocioEconomicoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('pessoa', SocioEconomicoController::class);
Route::resource('questionarios', SocioEconomicoController::class);

require __DIR__.'/auth.php';
