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

Route::group(['prefix' => 'carros'], function (){
    route::get('/', 'CarrosController@index');
    route::get('/novoCar', 'CarrosController@novoCar');
    route::get("/{id}/editar", 'CarrosController@editarCar');
    route::get("/{id}/excluir", "CarrosController@delete");
    route::post("/store", "CarrosController@store")->name('salvar_carro');
    route::post("/{id}/editar", "CarrosController@update")->name('edit_car');
    route::post("/{id}/excluir", "CarrosController@destroy")->name('delet_car');
});
