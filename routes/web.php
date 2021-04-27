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

Route::get('/', function(){
    return view('Pengguna.login');
});
Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'LoginController@logout')->name('logout');

Route::get('/beranda', 'BerandaController@index')->name('beranda');
Route::get('/datamahasiswa', 'MahasiswaController@index')->name('datamahasiswa');
Route::get('/createmahasiswa', 'MahasiswaController@create')->name('createmahasiswa');
Route::post('/simpanmahasiswa', 'MahasiswaController@store')->name('simpanmahasiswa');
Route::get('/editmahasiswa/{id}', 'MahasiswaController@edit')->name('editmahasiswa');
Route::post('/updatemahasiswa/{id}', 'MahasiswaController@update')->name('updatemahasiswa');
Route::get('/deletemahasiswa/{id}', 'MahasiswaController@destroy')->name('deletemahasiswa');

Route::get('/krsmahasiswa', 'KrsController@index')->name('krsmahasiswa');
Route::get('/createkrsmahasiswa', 'KrsController@create')->name('createkrsmahasiswa');
Route::post('/simpankrsmahasiswa', 'KrsController@store')->name('simpankrsmahasiswa');
Route::get('/editkrsmahasiswa/{id}', 'KrsController@edit')->name('editkrsmahasiswa');
Route::post('/updatekrsmahasiswa/{id}', 'KrsController@update')->name('updatekrsmahasiswa');
Route::get('/deletekrsmahasiswa/{id}', 'KrsController@destroy')->name('deletekrsmahasiswa');

Route::get('/datadosen', 'DosenController@index')->name('datadosen');
Route::get('/createdosen', 'DosenController@create')->name('createdosen');
Route::post('/simpandosen', 'DosenController@store')->name('simpandosen');
Route::get('/editdosen/{id}', 'DosenController@edit')->name('editdosen');
Route::post('/updatedosen/{id}', 'DosenController@update')->name('updatedosen');
Route::get('/deletedosen/{id}', 'DosenController@destroy')->name('deletedosen');

Route::get('/datajurusan', 'JurusanController@index')->name('datajurusan');
Route::get('/createjurusan', 'JurusanController@create')->name('createjurusan');
Route::post('/simpanjurusan', 'JurusanController@store')->name('simpanjurusan');
Route::get('/editjurusan/{id}', 'JurusanController@edit')->name('editjurusan');
Route::post('/updatejurusan/{id}', 'JurusanController@update')->name('updatejurusan');
Route::get('/deletejurusan/{id}', 'JurusanController@destroy')->name('deletejurusan');

Route::get('/dataprodi', 'ProdiController@index')->name('dataprodi');
Route::get('/createprodi','ProdiController@create')->name('createprodi');
Route::post('/simpanprodi', 'ProdiController@store')->name('simpanprodi');
Route::get('/editprodi/{id}', 'ProdiController@edit')->name('editprodi');
Route::post('/updateprodi/{id}', 'ProdiController@update')->name('updateprodi');
Route::get('/deleteprodi/{id}', 'ProdiController@destroy')->name('deleteprodi');