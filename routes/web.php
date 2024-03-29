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

Auth::routes();
Route::get('/home', [App\Http\Controllers\Dashboard::class, 'index'])->name('home');


Route::get('/','Dashboard@index')->name('anasayfa');

Route::get('/kategori','Category@index')->name('kategori');
Route::get('/kategori_form','Category@addform')->name('kategori_form');
Route::post('/kategori_ekle','Category@savedata')->name('kategori_ekle');
Route::get('/kategorisil/{id}','Category@delete')->name('kategorisil');
Route::get('/kategoriduzenle/{id}','Category@updateform')->name('kategoriduzenle');
Route::post('/kategoriguncelle/{id}','Category@update')->name('kategoriguncelle');

Route::get('/blog','Blog@index')->name('blog');
Route::get('/blog_form','Blog@addform')->name('blogform');
Route::post('/blogekle','Blog@savedata')->name('blogekle');
Route::get('/blogsil/{id}','Blog@delete')->name('blogsil');
Route::get('/blogduzenle/{id}','Blog@updateform')->name('blogduzenle');
Route::post('/blogguncelle/{id}','Blog@update')->name('blogguncelle');


Route::get('/mailform','MailController@index')->name('mailform');
Route::post('/sendmail','MailController@sendmail')->name('sendmail');

Route::get('/settings','Settings@index')->name('settings');
Route::any('/updatesettings','Settings@updatesettings')->name('updatesettings');


