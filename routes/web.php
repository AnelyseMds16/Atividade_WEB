<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/Sorteio', [App\Http\Controllers\SorteioController::class, 'index']);
Route::get('/Sorteio/novo', [App\Http\Controllers\SorteioController::class, 'create']);
Route::post('/Sorteio', [App\Http\Controllers\SorteioController::class, 'store']);
Route::get('/Sorteio/editar/{id}', [App\Http\Controllers\SorteioController::class, 'edit']);
Route::post('/Sorteio/{id}', [App\Http\Controllers\SorteioController::class, 'update']);
Route::get('/Sorteio/apagar/{id}', [App\Http\Controllers\SorteioController::class, 'destroy']);
Route::get('/Sorteio/sortear/{id}', [App\Http\Controllers\SorteioController::class, 'sortear']);
Route::get('/Sorteio/deletarSorteio/{id}', [App\Http\Controllers\SorteioController::class, 'deletarSorteio']);

Route::get('/participante/{id}', [App\Http\Controllers\ParticipanteController::class, 'index']);
Route::get('/participante/inscrever/{id}', [App\Http\Controllers\ParticipanteController::class, 'create']);
Route::post('/participante/{id}', [App\Http\Controllers\ParticipanteController::class, 'store']);
Route::get('/participante/editar/{id}', [App\Http\Controllers\ParticipanteController::class, 'edit']);
Route::post('/participante/atualizar/{id}', [App\Http\Controllers\ParticipanteController::class, 'update']);
Route::get('/participante/apagar/{id}', [App\Http\Controllers\ParticipanteController::class, 'destroy']);
Route::get('/participante/verAmigo/{id}', [App\Http\Controllers\ParticipanteController::class, 'verAmigo']);