<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('Template.dashboard');
});

Route::get('/warning', function () {
    return view('Template.nolevel');
});

Route::get('/login', function () {
    return view('Pengguna.login');
})->name('login');

Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'LoginController@logout')->name('logout');
Route::get('/beranda', 'BerandaController@index');
Route::get('/cetakword', 'BerandaController@cetakWord');


//super user
Route::group(['middleware' => ['auth', 'ceklevel:super user']], function () {
    Route::get('/data-pegawai', 'PegawaiController@index')->name('data-pegawai');
    Route::get('/create-pegawai', 'PegawaiController@create')->name('create-pegawai');
    Route::post('/simpan-pegawai', 'PegawaiController@store')->name('simpan-pegawai');
    Route::get('/edit-pegawai/{id}', 'PegawaiController@edit')->name('edit-pegawai');
    Route::post('/update-pegawai/{id}', 'PegawaiController@update')->name('update-pegawai');
    Route::get('/delete-pegawai/{id}', 'PegawaiController@destroy')->name('delete-pegawai');
    Route::get('/delete-ecp/{id}', 'EcpController@destroy')->name('delete-ecp');
});
//super user, user spv, admin engineer
Route::group(['middleware' => ['auth', 'ceklevel:super user,user spv,admin engineer']], function () {    
    Route::get('/data-ecp', 'EcpController@index')->name('data-ecp');
    Route::get('/data-spv', 'SpvController@index')->name('data-spv');
    Route::get('/data-cmt', 'CmtController@index')->name('data-cmt');
    Route::get('/show-spv/{id}', 'SpvController@show')->name('show-spv');
    Route::get('/show-ecp/{id}', 'EcpController@show')->name('show-ecp');
    Route::get('/show-cmt/{id}', 'CmtController@show')->name('show-cmt');
});

//user spv
Route::group(['middleware' => ['auth', 'ceklevel:user spv']], function () {    
    Route::get('/data-upload', 'UploadController@index')->name('data-upload');
    Route::get('/create-spv', 'SpvController@create')->name('create-spv');
    Route::post('/simpan-spv', 'SpvController@store')->name('simpan-spv');
    Route::get('/edit-spv/{id}', 'SpvController@edit')->name('edit-spv');
    Route::post('/update-spv/{id}', 'SpvController@update')->name('update-spv');
    Route::get('/delete-spv/{id}', 'SpvController@destroy')->name('delete-spv');
});
//admin engineer
Route::group(['middleware' => ['auth', 'ceklevel:admin engineer']], function () {    
    Route::get('/data-cmt', 'CmtController@index')->name('data-cmt');
    Route::get('/create-cmt', 'CmtController@create')->name('create-cmt');
    Route::post('/simpan-cmt', 'CmtController@store')->name('simpan-cmt');
    Route::get('/edit-cmt/{id}', 'CmtController@edit')->name('edit-cmt');
    Route::post('/update-cmt/{id}', 'CmtController@update')->name('update-cmt');
    Route::get('/delete-cmt/{id}', 'CmtController@destroy')->name('delete-cmt');
});

//user staff
Route::group(['middleware' => ['auth', 'ceklevel:user staff']], function () {
    Route::get('/create-ecp', 'EcpController@create')->name('create-ecp');
    Route::post('/simpan-ecp', 'EcpController@store')->name('simpan-ecp');
    Route::get('/edit-ecp/{id}', 'EcpController@edit')->name('edit-ecp');
    Route::post('/update-ecp/{id}', 'EcpController@update')->name('update-ecp');
    Route::get('/create-upload', 'UploadController@create')->name('create-upload');
    Route::post('/simpan-upload', 'UploadController@store')->name('simpan-upload');
});

