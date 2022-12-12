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
    return view('login');
});

Route::resource('/DifAdmin','DifAdminController');
Auth::routes();

Route::resource('/beneficiarios','BeneficiariosController');
Auth::routes();
Route::resource('/almacen','AlmacenController');
Auth::routes();
Route::resource('/apvigentes','APvigentesController');
Auth::routes();
Route::resource('/inventario','InventarioController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get("rutaprueba","PruebaController@prueba2");
Route::get("home","HomeController@Home");
Route::get("catalog/show/id","CatalogController@CatalogShow");
Route::get("catalog/create","CatalogController@CatalogCreate");
Route::get("catalog/edit/id","CatalogController@CatalogEdit");
Route::resource("trainers","TrainerController");
Auth::routes();


Route::get('/Beneficiarios', array('uses' =>'BeneficiariosController@index', 'as' => 'beneficiarios.principal'));
Route::get('/almacen', array('uses' =>'AlmacenController@index', 'as' => 'almacen.principal'));
Route::get('/apvigentes', array('uses' =>'APvigentesController@index', 'as' => 'apoyos.principal'));
Route::get('/inventario', array('uses' =>'InventarioController@index', 'as' => 'agregarI.principal'));
Route::get('/principal', array('uses' =>'BeneficiariosController@mostrar', 'as' => '/'));
Route::get('/apvigentes/create', array('uses' =>'APvigentesController@create', 'as' => 'agregar.principal'));
Route::get('/beneficiarios/create', array('uses' =>'BeneficiariosController@create', 'as' => 'agre.principal'));
Route::get('/almacen/create', array('uses' =>'AlmacenController@create', 'as' => 'agreGar.principal'));
Route::get('/inventario/create', array('uses' =>'InventarioController@create', 'as' => 'AgreGar.principal'));

Route::get('/', array('uses' =>'HomeController@index', 'as' => '/'));



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/deleteB/{id}','BeneficiariosController@destroy');
Route::get('/deleteA/{id}','AlmacenController@destroy');
Route::get('/deleteI/{id}','InventarioController@destroy');
Route::get('/deleteAP/{id}','APvigentesController@destroy');
Route::get('descargar-entrenadores', 'BeneficiariosController@pdf')->name('listado.pdf');

Route::resource('/search','Api\SearchController');
Route::get('/search1',['uses' => 'Api\SearchController@search','as' => 'search']);

