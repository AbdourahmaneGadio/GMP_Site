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
/*profil -Espace Etudiant*/
Route::get('/edt', function () {
    return view('profile.profils-Eetudiant.edt');
});

Route::get('/Mesnotes', function () {
    return view('profile.profils-Eetudiant.edt');
});
Route::get('/offresAlterance', function () {
    return view('profile.profils-Eetudiant.offresAlterance');
});

/*Fin de la partie Ee */

/*profil -Espace Enseignant*/
Route::get('/Ajoutnotes', function () {
    return view('profile.Profil-Enseignant.Ajoutnotes');
});
Route::get('/supportCours', function () {
    return view('profile.Profil-Enseignant.supportCours');
});
/*Fin de la partie Ee */

Route::get('/licencesPro', function () {
    return view('licencesPro');
});
