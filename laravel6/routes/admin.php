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

use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('admin.welcome', [
        'page' => 'dashboard',
    ]);
})->middleware(AdminMiddleware::class)->name('admin.home');


Route::middleware('aguest')->group(function () {
    Route::get('/login', 'AuthController@index')->name('admin.login');
    Route::post('/login', 'AuthController@store')->name('admin.login');
    Route::get('/register', 'AuthController@craete')->name('admin.register');
    Route::get('/forgotpassword', 'AuthController@forgotpassword')->name('admin.forgotpassword');
});

Route::middleware(AdminMiddleware::class)->group(function () {
    Route::get('logout', function () {
        Session::put('admin.login', false);
        Session::forget('admin.akun');

        return redirect()->route('admin.login');
    })->name('admin.logout');

    Route::prefix('book')->group(function () {
        Route::get('/', 'BookController@index')->name('book.index');
        Route::get('/show/{id}', 'BookController@show')->name('book.show');
        Route::get('/create', 'BookController@create')->name('book.create');
        Route::post('/store', 'BookController@store')->name('book.store');
        Route::get('/edit/{id}', 'BookController@edit')->name('book.edit');
        Route::put('/edit/{id}', 'BookController@edit')->name('book.update');
        Route::patch('/destroy/{id}', 'BookController@destroy')->name('book.destroy');
        Route::get('/author', 'BookController@author')->name('book.author');
        Route::post('/author/store', 'BookController@authorstore')->name('book.author.store');
        Route::patch('/author/detroy/{id}', 'BookController@authordestroy')->name('book.author.destroy');
    });

    Route::prefix('game')->group(function () {
        Route::get('/', 'GameController@index')->name('game.index');
        Route::get('/show/{id}', 'GameController@show')->name('game.show');
        Route::get('/create', 'GameController@create')->name('game.create');
        Route::post('/store', 'GameController@store')->name('game.store');
        Route::get('/edit/{id}', 'GameController@edit')->name('game.edit');
        Route::put('/update/{id}', 'GameController@update')->name('game.update');
        Route::delete('/destroy/{id}', 'GameController@destroy')->name('game.destroy');

        Route::prefix('publisher')->group(function () {
            Route::get('/', 'GamePublisherController@index')->name('game.publisher.index');
            Route::get('/create', 'GamePublisherController@create')->name('game.publisher.create');
            Route::post('/store', 'GamePublisherController@store')->name('game.publisher.store');
            Route::put('/update/{id}', 'GamePublisherController@update')->name('game.publisher.update');
            Route::delete('/destroy/{id}', 'GamePublisherController@destroy')->name('game.publisher.destroy');
        });
    });

    Route::prefix('other')->group(function(){
        Route::get('/order','OtherController@order')->name('other.order');
    });
});