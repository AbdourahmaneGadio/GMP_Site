<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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
});

require __DIR__.'/auth.php';

Route::get('/gmp', function () {
    return view('departementGMP');
});

Route::get('/licencesPro', function () {
    return view('licencesPro');
});

Route::get('/lp-mief', function () {
    return view('licencesPro.lpMief');
});


Route::get('/lp-mri', function () {
    return view('licencesPro.lpMri');
});

/*Espace-Entreprise */
Route::get('/AjouterPT', function () {
    return view('profile.Espace-Entreprise.AjouterPT');
});

