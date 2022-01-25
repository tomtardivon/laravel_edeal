<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerbase;
use App\Http\Controllers\PieceController;
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
Route::get('/apprenant_profilapprenant', [App\Http\Controllers\apprenant\apprenantController::class,'showprofil']); 
Route::post('/apprenant_profilapprenant', [App\Http\Controllers\apprenant\apprenantController::class, 'showprofil_update'])->name('showprofil_update');



Route::get('/formateur_profilformateur', [App\Http\Controllers\formateur\formateurController::class,'showprofil']); 
Route::get('/apprenant_acceuilapprenant', [App\Http\Controllers\apprenant\apprenantController::class,'index']); 
Route::get('/formateur_acceuilformateur', [App\Http\Controllers\formateur\formateurController::class,'index']); 

Route::get('/apprenant_cours', [App\Http\Controllers\apprenant\apprenantController::class, 'showcours']);
Route::get('/apprenant_excours', [App\Http\Controllers\apprenant\apprenantController::class, 'showexcours']);

Route::get('/apprenant_projet', [App\Http\Controllers\apprenant\apprenantController::class, 'showprojet']);
Route::get('/apprenant_model3D', [App\Http\Controllers\apprenant\apprenantController::class, 'showmodel3D']);
Route::get('/apprenant_recherche', [App\Http\Controllers\apprenant\apprenantController::class, 'search']);




Route::get('/apprenant_biblio',  [PieceController::class, 'showbiblio'])->name('showbiblio');


Route::post('/pieces_store', [PieceController::class, 'store'])->name('pieces_store');

Route::get('/pieces_delete/{id}', [PieceController::class, 'delete'])->name('pieces_delete');

Route::get('/pieces_details/{id}', [PieceController::class, 'details'])->name('pieces_details');

Route::get('/pieces_details_3d/{id}', [PieceController::class, 'pieces_details_3d'])->name('pieces_details_3d');


Route::get('/search', [PieceController::class, 'search'])->name('pieces.search');

Route::get('/pieces_edit/{id}', [PieceController::class, 'edite'])->name('pieces_edite');
Route::get('/pieces_edit', [PieceController::class, 'edit'])->name('pieces_edit');

Route::post('/pieces_edit/{id}', [PieceController::class, 'update'])->name('pieces_update');


Route::get('tag/{slug}',[PieceController::class, 'tag'])->name('pieces_tag');



Auth::routes();

Route::get('/', function(){
    return redirect()->route('login');
});