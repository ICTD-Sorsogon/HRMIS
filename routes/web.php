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

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', 'DashboardController@getUser')->name('dashboard');

    Route::get('/profile/{id}/details', 'ProfileController@getDetails')->name('profile-details');

    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

    Route::get('/test', 'ProfileController@profiles');

    Route::resource('profile', 'ProfileController');

    //Eligibilities
    Route::get('/profile/{id}/details', 'ProfileController@eligibilities');
});