<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonnelController;


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

// Route::get('liste_personnel', [PersonnelController::class, 'index'])->name('liste');

// Route::get('formulaire_personnel', [PersonnelController::class, 'create'])->name('formulaire');

// Route::post('insertion', [PersonnelController::class, 'store'])->name('insertion');

Route::resource('gestion_personnel', PersonnelController::class);

Route::get('supprimer/{id}', [PersonnelController::class, 'destroy']);





