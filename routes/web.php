<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CaracteristiqueController;

use App\Http\Controllers\usercontroller;
use App\Http\Controllers\produitcontroller;
use App\Models\User;
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
Route::get('/SupprimerCategorie/{id}',[CategorieController::class, 'Supprimer'])->name('SupprimerCategorie');
Route::get('/ModifierCategorie/{id}',[CategorieController::class, 'Modifier'])->name('ModifierCategorie');
Route::post('/UpdateCategorie',[CategorieController::class, 'Update'])->name('UpdateCategorie');





// Appel des routes pour la caracteristique
Route::get('/Caracteristique',[CaracteristiqueController::class, 'FormCaracteristique'])->name('Caracteristique');
Route::post('/AddCaracteristique',[CaracteristiqueController::class, 'AddCaracteristique'])->name('AddCaracteristique');











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
    return view('header');
});

Route::get('/login', [usercontroller::class, 'login'])->name('login');

Route::delete('/logout', [usercontroller::class, 'logout'])->name('logout');

Route::get('/signin', [usercontroller::class, 'signin'])->name('signin');

Route::post('/createuser', [usercontroller::class, 'createuser'])->name('createuser');

Route::post('/loginuser', [usercontroller::class, 'loginuser'])->name('loginuser');

Route::get('/acceuill', function () {
    return view('acceuill');
})->name('acceuill')->middleware("auth");

Route::get('/guest', function () {
    return view('guestcontain');
})->name('guestmain');

Route::get('/formproduct', [produitcontroller::class, 'formproduct'])->name('formproduct');
Route::post('/AddProduit',[ProduitController::class, 'AddProduit'])->name('AddProduit');
Route::get('/maincontain', [produitcontroller::class, 'ListeP'])->name('ListeP');
Route::get('/searchprodupd/{id}', [produitcontroller::class, 'searchprodupd'])->name('searchprodupd');






Route::post('/listuser', [produitcontroller::class, 'listuser'])->name('listuser');
Route::get('/test', function () {
    $options = User::all(); // Utilisez une requête appropriée pour vos besoins

        // Passer les options à la vue
        return view('test', ['options' => $options]);
})->name('test');
Route::post('/options', [usercontroller::class, 'getoptions'])->name('options');
