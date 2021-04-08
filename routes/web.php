<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;

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

Route::resource("produits", ProduitController::class);

Route::get("ajouter-produit", [MainController::class, "ajouterProduit"]);

Route::get("update-produit/{produit}", [MainController::class, "updateProduit"]);

Route::get("update-produit2/{id}", [MainController::class, "updateProduit2"]);

Route::get("suppression-produit/{id}", [MainController::class, "supprimerProduit"]);