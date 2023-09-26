<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




Route::get('/modelos','App\Http\Controllers\modelosController@index')->name('modelos');
Route::post('/registrar_modelos','App\Http\Controllers\modelosController@store')->name('registrar_modelos');
Route::get('/show_modelos/{id}','App\Http\Controllers\modelosController@show')->name('mostrar_modelos');
Route::put('/update_modelos/{id}','App\Http\Controllers\modelosController@update')->name('atualizar_modelos');
Route::delete('/deletar_modelos/{id}','App\Http\Controllers\modelosController@destroy')->name('deletar_modelos');
Route::post('/uploadimagem/{id}','App\Http\Controllers\modelosController@uploadImagem');


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::middleware(['auth:sanctum'])->group(
	function () {
    Route::get('/teste', [AuthController::class,'teste']);

    Route::post('logout', [AuthController::class, 'logout']);
}); // Fim da verificação de autenticação
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
