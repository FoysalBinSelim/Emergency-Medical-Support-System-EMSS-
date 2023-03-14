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

Route::get('/', 'PagesController@index')->name('adib');
Route::get('/about', 'PagesController@about')->name('partho');
Route::get('/hospital', 'PagesController@hospital')->name('foysul');
Route::get('/doctor', 'PagesController@doctor')->name('doct');
Route::get('/ambulance', 'PagesController@ambulance')->name('red');
Route::post('/search', 'PagesController@search')->name('find');
Route::get('/doctorsearch', 'PagesController@doctorsearch')->name('searchdoc');
Route::get('/ambulancesearch', 'PagesController@ambulancesearch')->name('searchambulance');
Route::get('/covid19', 'PagesController@covid19')->name('virus');