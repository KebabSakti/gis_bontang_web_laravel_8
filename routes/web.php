<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicPageController;
use App\Http\Controllers\UserAuthentication;
use App\Http\Controllers\UserFormController;
use App\Http\Controllers\AdminAuthentication;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\StaticContentController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\FormulirController;

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
    return redirect('beranda');
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

//USER ROUTE (REGISTERED USER)
Route::get('user/', function () {
    return redirect('user/login');
});
Route::group(['prefix' => 'user'], function () {
    //USER AUTH
    Route::get('login', [UserAuthentication::class, 'login'])->name('auth.user.loginpage');
    Route::post('login', [UserAuthentication::class, 'loginSubmit'])->name('auth.user.loginsubmit');
    //USER FORM
    Route::get('form', [UserFormController::class, 'form'])->name('user.form');
    Route::post('form', [UserFormController::class, 'formSubmit'])->name('user.formsubmit');
});

//ADMIN ROUTE
Route::get('admin/', function () {
    return redirect('admin/login');
});
Route::group(['prefix' => 'admin'], function () {
    //ADMIN AUTH
    Route::get('login', [AdminAuthentication::class, 'login'])->name('auth.admin.loginpage');
    Route::post('login', [AdminAuthentication::class, 'loginSubmit'])->name('auth.admin.loginsubmit');
    Route::get('logout', [AdminAuthentication::class, 'logout'])->name('auth.admin.logout');
    //ADMIN PAGES
    Route::get('beranda', [AdminPageController::class, 'beranda'])->name('admin.beranda');
    Route::post('option/ajax', [OptionController::class, 'ajax'])->name('option.ajax');
    Route::resource('option', OptionController::class);
    Route::post('area/ajax', [AreaController::class, 'ajax'])->name('area.ajax');
    Route::get('area/ajax/code', [AreaController::class, 'ajaxCode'])->name('area.ajaxcode');
    Route::resource('area', AreaController::class);
    Route::post('news/ajax', [NewsController::class, 'ajax'])->name('news.ajax');
    Route::resource('news', NewsController::class);
    Route::post('agenda/ajax', [AgendaController::class, 'ajax'])->name('agenda.ajax');
    Route::resource('agenda', AgendaController::class);
    Route::post('static/ajax', [StaticContentController::class, 'ajax'])->name('static.ajax');
    Route::resource('static', StaticContentController::class);
    Route::post('video/ajax', [VideoController::class, 'ajax'])->name('video.ajax');
    Route::resource('video', VideoController::class);
    Route::post('pesan/ajax', [ContactController::class, 'ajax'])->name('pesan.ajax');
    Route::resource('pesan', ContactController::class);
    Route::post('gallery/ajax', [GalleryController::class, 'ajax'])->name('gallery.ajax');
    Route::resource('gallery', GalleryController::class);
    Route::post('formulir/ajax', [FormulirController::class, 'ajax'])->name('formulir.ajax');
    Route::get('formulir/{id}/id/{tag}/foto', [FormulirController::class, 'foto'])->name('formulir.foto');
    Route::resource('formulir', FormulirController::class);
});
