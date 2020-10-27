<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicPageController;

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

//PUBLIC ROUTE
Route::get('/', function () {
    return redirect()->route('publicpagecontroller.beranda');
});
Route::get('beranda', [PublicPageController::class, 'beranda'])->name('publicpagecontroller.beranda');
Route::get('berita', [PublicPageController::class, 'berita'])->name('publicpagecontroller.berita');
Route::get('berita/{id}/detail', [PublicPageController::class, 'beritaDetail'])->name('publicpagecontroller.beritadetail');
Route::match(['get', 'post'], 'agenda', [PublicPageController::class, 'agenda'])->name('publicpagecontroller.agenda');
Route::get('profil', [PublicPageController::class, 'profile'])->name('publicpagecontroller.profile');
Route::get('video', [PublicPageController::class, 'video'])->name('publicpagecontroller.video');
Route::get('gallery', [PublicPageController::class, 'gallery'])->name('publicpagecontroller.gallery');
Route::get('kontak', [PublicPageController::class, 'kontak'])->name('publicpagecontroller.kontak');
Route::post('kontak', [PublicPageController::class, 'kontakSubmit'])->name('publicpagecontroller.kontaksubmit');

//ADMIN ROUTE