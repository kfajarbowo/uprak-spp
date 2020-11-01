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

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('admin/logout','AuthController@logout');


Route::post('/reservation','ReservationController@reserve')->name('reservation.reserve');
Route::post('/contact','ContactController@sendMessage')->name('contact.send');

Route::get('/', function () {
    return view('welcome');
});



Route::group(['prefix' => 'admin','middelware'=>['auth','checkRole:admin,siswa'],'namespace'=>'admin'], function() {
    Route::get('dashboard','DashboardController@index')->name('admin.dashboard');
    Route::resource('siswa','SiswaController');
    Route::resource('spp','SppController');
    Route::resource('kelas', 'KelasController');

    Route::get('reservation','ReservationController@index')->name('reservation.index');
    Route::post('reservation/{id}','ReservationController@status')->name('reservation.status');
    Route::delete('reservation/{id}','ReservationController@destroy')->name('reservation.destroy');

    Route::get('contact','ContactController@index')->name('contact.index');
    Route::get('contact/{id}','ContactController@show')->name('contact.show');
    Route::delete('contact/{id}','ContactController@destroy')->name('contact.destroy');

});
Route::group(['prefix' => 'admin','middelware'=>['auth','checkRole:admin,siswa'],'namespace'=>'admin'], function() {
    Route::get('dashboard','DashboardController@index')->name('admin.dashboard');
    // Route::resource('siswa','SiswaController');
    // Route::resource('spp','SppController');
    // Route::resource('kelas', 'KelasController');

    // Route::get('reservation','ReservationController@index')->name('reservation.index');
    // Route::post('reservation/{id}','ReservationController@status')->name('reservation.status');
    // Route::delete('reservation/{id}','ReservationController@destroy')->name('reservation.destroy');

    // Route::get('contact','ContactController@index')->name('contact.index');
    // Route::get('contact/{id}','ContactController@show')->name('contact.show');
    // Route::delete('contact/{id}','ContactController@destroy')->name('contact.destroy');

});
