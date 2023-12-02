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


Route::resource('/', FrontEndController::class);

Route::get('locale/{locale}', function($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('about', [FrontEndController::class, 'about'])->name('about');
Route::get('product', [FrontEndController::class, 'product'])->name('product');
Route::get('contact', [FrontEndController::class, 'contact'])->name('contact');

Route::get('/', [FrontEndController::class, 'index'])->name('index');

Route::middleware(['hideSendRoute'])->get('/send', [FrontEndController::class, 'send'])->name('send');