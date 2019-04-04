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
    return view('frontend.index');
});
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/berita', function () {
    return view('frontend.berita');
});
Route::get('/kontak', function () {
    return view('frontend.kontak');
});
Route::get('/galeri', function () {
    return view('frontend.gallery');
});
Route::get('/login', function () {
    return view('layouts.login');
});
Route::get('/art', function () {
    return view('frontend.artikel');
});
Route::get('/produk', function () {
    return view('frontend.produk');
});
Route::get('/test', 'FrontEndController@testimonis');

Route::get('/single', function () {
    return view('frontend.single');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('kategori', 'KategoriController');
Route::resource('barang', 'BarangController');
Route::resource('tentang', 'TentangController');
Route::resource('artikel', 'ArtikelController');
Route::resource('kategoriartikel', 'KategoriArtikelController');

Route::group(['prefix'=> 'admin', 'middleware' => ['auth','role:admin']], function(){
    Route::resource('kategori','KategoriController');
    Route::resource('barang','BarangController');
    Route::resource('tentang','TentangController');
    Route::resource('artikel','ArtikelController');
    Route::resource('kategoriartikel','KategoriArtikelController');
    Route::resource('galeri','GaleriController');
    Route::resource('testimoni','TestimoniController');
});


Route::get('artikel_kategori/{id}', 'FrontendController@filter_artikels');
Route::get('/artikels/single/{artikels}', 'FrontEndController@single')->name('single');
Route::get('/produks/singleproduk/{barangs}', 'FrontEndController@singleproduk')->name('singleproduk');
Route::get('/single/{artikels}', 'FrontendController@singleblog')->name('singleblog');
