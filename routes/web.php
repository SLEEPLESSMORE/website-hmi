<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/sejarah-hmi', 'HomeController@sejarah')->name('sejarah');
Route::get('/tentang-hmi', 'HomeController@about')->name('tentang');
Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('/kontak-kami', 'HomeController@kontak')->name('kontak');
Route::get('/susunan-pengurus', 'HomeController@pengurus')->name('pengurus');
Route::get('/perpustakaan', 'HomeController@perpus')->name('perpus');
Route::get('/training', 'HomeController@training')->name('training');
Route::get('/detail-book/{id}', 'HomeController@detailbook')->name('detail-book');
Route::get('/detail-training/{id}', 'HomeController@detailtraining')->name('detail-training');
Route::get('/berita', 'HomeController@berita')->name('berita');
Route::get('/detail-berita/{id}', 'HomeController@detailberita')->name('detail-berita');
Route::get('/agenda', 'HomeController@agenda')->name('agenda');
Route::get('/detail-agenda/{id}', 'HomeController@detailagenda')->name('detail-agenda');
Route::get('/keluar', 'HomeController@logout')->name('keluar');

// Route::get('/login', 'HomeController@login')->name('login');
// Route::get('/register', 'HomeController@register')->name('register');

// Admin Route

// ->middleware(['auth','admin'])
Route::prefix('dashboard')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function(){
        Route::get('/', 'DashboardController@index')->name('dashboard');
        Route::resource('user', 'UserController');
        Route::resource('member', 'MemberController');
        Route::resource('surat', 'SuratController');
        Route::resource('book', 'BookController');
        Route::resource('training', 'TrainingController');
        Route::resource('berita', 'BeritaController');
        Route::resource('agenda', 'AgendaController');
    });




Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
