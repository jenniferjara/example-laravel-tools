<?php

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

Route::get('/',  ['as' => 'site.home.index', 'uses' => 'HomeController@index']);

Route::get('/reconocimiento', ['as' => 'site.layout.reconocimiento', 'uses' => 'LayoutsController@reconocimiento']);

Route::get('/beneficios', ['as' => 'site.layout.beneficio', 'uses' => 'LayoutsController@beneficio']);

Route::get('/medicion', ['as' => 'site.layout.medicion', 'uses' => 'LayoutsController@medicion']);

Route::get('/nosotros', ['as' => 'site.layout.nosotros', 'uses' => 'LayoutsController@about']);

Route::get('/prueba-gratis', ['as' => 'site.layout.free', 'uses' => 'LayoutsController@gratis']);

Route::get('/contactanos', ['as' => 'site.layout.contacto', 'uses' => 'LayoutsController@contacto']);

/* formularios */

Route::post('/contact', 'ContactController@registro');
Route::post('/free', 'FreeController@registro');
Route::post('/cotiza', 'CotizaController@cotiza');

Route::get('/success-contact', ['as' => 'site.partials.messages.success', 'uses' => 'ContactController@success']);
Route::get('/error-contact', ['as' => 'site.partials.messages.error', 'uses' => 'ContactController@error']);

Route::get('/success-free', ['as' => 'site.partials.messages.success', 'uses' => 'FreeController@success']);
Route::get('/error-free', ['as' => 'site.partials.messages.error', 'uses' => 'FreeController@error']);

Route::get('/success-checkout', ['as' => 'site.partials.messages.successcheckout', 'uses' => 'CotizaController@success']);
Route::get('/error-checkout', ['as' => 'site.partials.messages.errorcheckout', 'uses' => 'CotizaController@error']);