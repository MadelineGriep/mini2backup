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
        return view('welcome');
});
/*
/*Route::get('/contact', function () {
    return view('pages.contact');
});
//Route::post('/about', function () {
    return view('pages.about');
});*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact', 'ContactController@contact')->name('contact');
Route::get('/about', 'ContactController@about')->name('about');
Route::post('/contact', 'ContactController@store')->name('contact.store');
Route::get('/thanks/{name}', 'ContactController@thanks')->name('thanks');
