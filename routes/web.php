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
// dd(+variable); podemos inspeccionar datos 

// $ingre= App\Ingrediente::findOrFail(1);
// return $ingre->platos;

//Route::resource('home','AcercaController');
Route::get('/', ['as' => 'home','uses' => 'AcercaController@home']);
//Route::post('mi_ruta_post', 'AcercaController@clickplato');
Route::POST('mi_ruta_post', 'AcercaController@clickplato');
//->name('clickplato')
Route::resource('home','AcercaController');
//Route::get('/', ['as' => 'home','uses' => 'AcercaController']);


// Route::get('platodia', function () {
//     return view('platodia');
// });
// Route::get('menu', function () {
//     return view('menu');
// });

// Route::get('contacto', function () {
//     return view('contacto');
// });