<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('users', 'UsersController@store')->name('users.store');


Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('login', 'AuthController@login')->name('login');
});

Route::middleware('jwt.verify')->group(function () {
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('/users/curso', 'UsersController@curso');
    Route::resource('users', 'UsersController')->except(['store']);
    Route::resource('atividades', 'AtividadesController');
    Route::resource('categorias', 'CategoriasController');
    Route::resource('cursos', 'CursosController');
});
