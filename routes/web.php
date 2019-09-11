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
//---------belajar routing-----------

Route::get('/material', function () {
    return view('layouts/material');
});

Route::get('/hello', function () {
    return "Selamat Pagi Kawan2";
});

Route::get('/salam/{nama}/{alamat}', function ($nama,$alamat) {
    return view('salam',['nama'=>$nama,'alamat'=>$alamat]);
});

Route::get('/kabar/{nama}/{alamat}', function ($nama,$alamat) {
    return view('kabari',['nama'=>$nama,'alamat'=>$alamat]);
});

Route::get('/siswa/{nama}/{matpel}/{nilai}', function ($nama,$matpel,$nilai) {
    return view('hasil_ujian',['nama'=>$nama,'matpel'=>$matpel,
                               'nilai'=>$nilai]);
});

//------------routing aplikasi myapp---------------
Route::get('/', function () {
    //return view('welcome');
    return view('themes/home');
})->middleware('auth');

Route::get('/home', function () {
    return view('themes/home');
})->middleware('auth');

Route::get('/about', function () {
    return view('themes/about');
})->middleware('auth');

Route::get('/gallery', function () {
    return view('themes/gallery');
})->middleware('auth');

Route::get('/contact', function () {
    return view('themes/contact');
})->middleware('auth');

Route::resource('pengarang', 'PengarangController')->middleware('auth');
Route::resource('penerbit', 'PenerbitController')->middleware('auth');
Route::resource('kategori', 'KategoriController')->middleware('auth');
Route::resource('buku', 'BukuController')->middleware('auth');

Auth::routes();
Route::get('/logout', 'AuthController@logout');
Route::get('/users','UserController@index')->middleware('auth');

Route::get ('generate-pdf','HomeController@generatePDF')->middleware('auth');
Route::get('pdfinbuku','BukuController@cetak_pdf')->middleware('auth');
/*
route::group(['middleware' => ['auth','RoleCheck:Administrator,']], function(){
	Route::get('/users','UserController@index');
});
*/


//Route::get('/home', 'HomeController@index')->name('home');
