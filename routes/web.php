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

Route::get('/', function () {
    return redirect('jobs');
});

//Route::domain('admin')->group(function(){
Route::prefix('jobs')->group(function() {
    Route::get('/', 'JobsController@index');
    Route::get('/create', 'JobsController@create')->name('jobs.create');
    Route::post('/', 'JobsController@store')->name('jobs.store');
    Route::get('/edit/{client}/{id}', 'JobsController@edit')->name('jobs.edit');
    Route::put('/{id}', 'JobsController@update')->name('jobs.update');
    Route::delete('/{id}', 'JobsController@delete')->name('jobs.delete');
});

Route::prefix('clients')->group(function() {
    Route::get('/', 'ClientsController@index');
});

Route::get('aplicar', 'CandidateController@form');
Route::post('aplicar/listo', 'CandidateController@submit');
//});
