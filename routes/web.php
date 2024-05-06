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
    return redirect('/dashboard');

});

Route::get('/login', [App\Http\Controllers\Login::class, 'index'])->name('login');
Route::get('/logout', [App\Http\Controllers\Login::class, 'logout'])->name('logout');
Route::post('/logincheck', [App\Http\Controllers\Login::class, 'logincheck'])->name('logincheck');


Route::get('/pariwisata', [App\Http\Controllers\Pariwisata::class, 'index'])->name('pariwisata');

Route::get('/users', [App\Http\Controllers\Pariwisata::class, 'users'])->name('users');
Route::post('/postuser', [App\Http\Controllers\Pariwisata::class, 'postuser'])->name('postuser');
Route::get('/deleteuser/{id}', [App\Http\Controllers\Pariwisata::class, 'deleteuser'])->name('deleteuser');

Route::get('/berita', [App\Http\Controllers\Pariwisata::class, 'berita'])->name('berita');
Route::post('/post_berita', [App\Http\Controllers\Pariwisata::class, 'post_berita'])->name('post_berita');
Route::get('/deleteinput/{id}', [App\Http\Controllers\Pariwisata::class, 'deleteinput'])->name('deleteinput');

Route::get('/wisata', [App\Http\Controllers\Pariwisata::class, 'wisata'])->name('wisata');
Route::post('/post_wisata', [App\Http\Controllers\Pariwisata::class, 'post_wisata'])->name('post_wisata');
Route::get('/deletewisata/{id}', [App\Http\Controllers\Pariwisata::class, 'deletewisata'])->name('deletewisata');

Route::get('/kalendar', [App\Http\Controllers\Pariwisata::class, 'kalendar'])->name('kalendar');
Route::post('/post_kalendar', [App\Http\Controllers\Pariwisata::class, 'post_kalendar'])->name('post_kalendar');
Route::get('/deletekalendar/{id}', [App\Http\Controllers\Pariwisata::class, 'deletewisata'])->name('deletekalendar');

Route::get('/galeri', [App\Http\Controllers\Pariwisata::class, 'galeri'])->name('galeri');
Route::post('/post_galeri', [App\Http\Controllers\Pariwisata::class, 'post_galeri'])->name('post_galeri');
Route::get('/deletegaleri/{id}', [App\Http\Controllers\Pariwisata::class, 'deletegaleri'])->name('deletegaleri');

Route::get('/dashboard', [App\Http\Controllers\Dashboard::class, 'index'])->name('dashboard');
Route::get('/dashboard/wisata', [App\Http\Controllers\Dashboard::class, 'wisata'])->name('dashboard/wisata');
Route::get('/dashboard/kalendar', [App\Http\Controllers\Dashboard::class, 'kalendar'])->name('dashboard/kalendar');
Route::get('/dashboard/galeri', [App\Http\Controllers\Dashboard::class, 'galeri'])->name('dashboard/galeri');
Route::get('/dashboard/kontak', [App\Http\Controllers\Dashboard::class, 'kontak'])->name('dashboard/kontak');

Route::get('/dashboard/detail/{id}', [App\Http\Controllers\Dashboard::class, 'detail'])->name('dashboard/detail');
Route::get('/dashboard/detailwisata/{id}', [App\Http\Controllers\Dashboard::class, 'detailwisata'])->name('dashboard/detailwisata');