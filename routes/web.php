<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\MaisonneuveEtudiantController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/etudiants', [MaisonneuveEtudiantController::class, 'index'])->name('etudiants');
Route::get('/etudiants/create', [MaisonneuveEtudiantController::class, 'create'])->name('etudiants.create');
Route::post('/etudiants/create', [MaisonneuveEtudiantController::class, 'store'])->name('etudiants.store');
Route::get('/etudiants/{id}', [MaisonneuveEtudiantController::class, 'show'])->name('etudiants.show');
Route::get('etudiants/{id}/edit', [MaisonneuveEtudiantController::class, 'edit'])->name('etudiants.edit');
Route::put('etudiants/{etud}/edit', [MaisonneuveEtudiantController::class, 'update']);
Route::delete('etudiants/{id}', [MaisonneuveEtudiantController::class, 'destroy']);







