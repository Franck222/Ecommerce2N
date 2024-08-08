<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CaracteristiqueController;

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

// Appel des routes pour la categorie
Route::get('/Categorie',[CategorieController::class, 'FormCategorie'])->name('Categorie');
Route::post('/AddCategorie',[CategorieController::class, 'AddCategorie'])->name('AddCategorie');
Route::get('/ListCategorie',[CategorieController::class, 'Liste'])->name('ListCategorie');


// Appel des routes pour la caracteristique
Route::get('/Caracteristique',[CaracteristiqueController::class, 'FormCaracteristique'])->name('Caracteristique');
Route::post('/AddCaracteristique',[CaracteristiqueController::class, 'AddCaracteristique'])->name('AddCaracteristique');







