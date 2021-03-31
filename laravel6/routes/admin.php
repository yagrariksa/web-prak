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
    return view('admin.welcome',[
        'page' => 'dashboard',
    ]);
})->name('admin.home');

Route::prefix('book')->group(function(){
    Route::get('/','BookController@index')->name('book.index');
    Route::get('/show/{id}','BookController@show')->name('book.show');
    Route::get('/create','BookController@create')->name('book.create');
    Route::post('/store','BookController@store')->name('book.store');
    Route::get('/edit/{id}', 'BookController@edit')->name('book.edit');
    Route::put('/edit/{id}','BookController@edit')->name('book.update');
    Route::patch('/destroy/{id}','BookController@destroy')->name('book.destroy');
    Route::get('/author','BookController@author')->name('book.author');
    Route::post('/author/store','BookController@authorstore')->name('book.author.store');
    Route::patch('/author/detroy/{id}','BookController@authordestroy')->name('book.author.destroy');
});

Route::prefix('game')->group(function(){
    Route::get('/','GameController@index')->name('game.index');
    Route::get('/{id}','GameController@show')->name('game.show');
    Route::get('/create','GameController@create')->name('game.create');
    Route::post('/store','GameController@store')->name('game.store');
    Route::get('/edit/{id}', 'GameController@edit')->name('game.edit');
    Route::put('/edit/{id}','GameController@edit')->name('game.update');
    Route::patch('/destroy/{id}','GameController@destroy')->name('game.destroy');
});
