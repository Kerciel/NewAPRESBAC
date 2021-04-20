<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InscriptionController;
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
    return view('index');
});


Route::get('inscription', [InscriptionController::class, 'index'])->name('inscription');

//Route::get('/', [InscriptionController::Inscription')->name('Inscription');
Route::get('/all-etudiant',[InscriptionController::class, 'getalletudiant'])->name('etudiant.getalletudiantusingmodel');
Route::get('etudiant', [InscriptionController::class,  'getidentite'])->name('etudiant');
