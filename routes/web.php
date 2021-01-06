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
    return view('welcome');
});


Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/password/reset', function () {
    return view('auth.passwords.email');
});

Route::get('/profiles', 'ProfileController@profiles');

Route::resource('profile', 'ProfileController');

Route::get('/dashboard', function() {
    return view('Dashboard');

});

Auth::routes();

Route::group(['middleware' => ['auth']], function() {

    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

    Route::get('/test', 'ProfileController@profiles');

    Route::resource('profile', 'ProfileController');

    Route::get('/dashboard', function() {
        return view('Dashboard');
    });


    // Route::get('/home', 'HomeController@index')->name('home');
});