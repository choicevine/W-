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

Route::get('/', 'PagesController@index');
Route::get('/index', 'PagesController@register');
Route::get('/generate', 'PagesController@generate');
Route::get('/confirm', 'PagesController@confirm');
Route::get('/PHPGangstar', 'PagesController@gangstar');
Route::get('/authenticator', 'PagesController@authenticator');
Route::get('/complete-registration', 'Auth\RegisterController@completeRegistration');


Route::post('/2fa', function () {
    return redirect(URL()->previous());
})->name('2fa')->middleware('2fa');







Route::post('/confirm', function () {
    return redirect(URL()->previous());
})->name('2fa')->middleware('2fa');


Route::get('/generate', function () {
    return view('pages.generate');
});

Route::get('/generateQR', function () {
    return view('GoogleAuthenticator.generate');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


