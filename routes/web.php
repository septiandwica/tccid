<?php

use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\ContactController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('locale/{locale}', function($locale){
    Session::put('locale', $locale);
    return redirect() -> back();
});


Route::middleware(['hideSendRoute'])->get('/send', [FrontEndController::class, 'send'])->name('send');

Route::get('about', [FrontEndController::class, 'about'])->name('about');
Route::get('index', [FrontEndController::class, 'index'])->name('home');
Route::get('product', [FrontEndController::class, 'product'])->name('product');
Route::get('contact', [FrontEndController::class, 'contact'])->name('contact');


Route::view('/contact', 'contact')->name('contact');
Route::post('/send', [ContactController::class, 'send'])->name('send.email');




Route::resource('/', FrontEndController::class);
Route::get('locale/{locale}', function($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

// Rute untuk halaman utama
Route::get('about', [FrontEndController::class, 'about'])->name('about');
Route::get('product', [FrontEndController::class, 'product'])->name('product');

// Rute untuk halaman kontak
Route::get('contact', [FrontEndController::class, 'contact'])->name('contact');
Route::get('send', [FrontEndController::class, 'send'])->name('send');

Route::post('contact', [ContactController::class, 'send'])->name('send.email'); // Perbarui rute ini sesuai dengan rute yang baru

// Rute untuk halaman indeks atau halaman utama
Route::get('/', [FrontEndController::class, 'index'])->name('index');
