<?php

use Illuminate\Support\Facades\Route;
use App\Models\Car;

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

Route::get('/', 'App\Http\Controllers\CarsController@index');
Route::get('/lista',  'App\Http\Controllers\CarsController@lista');
Route::get('/criar', 'App\Http\Controllers\CarsController@create');
Route::get('/{id}/show','App\Http\Controllers\CarsController@show');
Route::get('/{id}/editar', 'App\Http\Controllers\CarsController@edit');
Route::put('/criar', 'App\Http\Controllers\CarsController@update')->name('atualizar_carro');
Route::post('/criar', 'App\Http\Controllers\CarsController@store')->name('registrar_carro');
Route::delete('/deletar/{car}', function (Car $car) {
    $car->delete();

    return redirect('/lista');
});