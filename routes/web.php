<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\dashboard\ProductController as ProdDash;
use App\Http\Controllers\dashboard\ProfilController;
use App\Http\Controllers\dashboard\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();
Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/catalog', [ProductController::class, 'index'])->name('catalog');
Route::get('/catalog/{id}', [ProductController::class, 'show'])->name('catalog.show');
Route::get('/tentang-kami', function(){return view('frontend.about');})->name('about');
Route::get('/kontak', function(){return view('frontend.contactus');})->name('contact');
Route::get('kebijakan-privasi', function(){
    return view('frontend.kebijakan');
})->name('kebijakan');
Route::get('syarat-dan-ketentuan', function(){
    return view('frontend.syarat');
})->name('syarat');


Route::middleware('auth')->group(function () {

    Route::prefix('dashboard')->group(function(){
        Route::prefix('profile')->group(function () {
            Route::get('/', [ProfilController::class, 'index'])->name('profile');
            Route::put('/profile/{id}', [ProfilController::class, 'update'])->name('profile.update');
            Route::put('/profile-foto/{id}', [ProfilController::class, 'updateFoto'])->name('profile.update.foto');
            Route::put('/profile-password/{id}', [ProfilController::class, 'updatePassword'])->name('profile.update.password');
        });

        Route::prefix('catalog')->group(function () {
            Route::get('/', [ProdDash::class, 'index'])->name('product');
            Route::get('/{id}', [ProdDash::class, 'show'])->name('product.show');
            Route::get('/img/{id}', [ProdDash::class, 'showimg'])->name('product.show.img');
            Route::post('/store', [ProdDash::class, 'store'])->name('product.store');
            Route::put('/update/{id}', [ProdDash::class, 'update'])->name('product.update');
            Route::delete('/delete/{id}', [ProdDash::class, 'destroy'])->name('product.destroy');
            Route::put('/images/{imageId}/update', [ProdDash::class, 'updateImage'])->name('images.update');
            Route::delete('/images/{imageId}', [ProdDash::class, 'destroyImg'])->name('images.destroy');
            Route::post('/products/{id}/images/add', [ProdDash::class, 'addImage'])->name('images.add');

        });
        Route::prefix('user')->group(function () {
            Route::get('/', [UserController::class, 'index'])->name('user');
            Route::post('/store', [UserController::class, 'store'])->name('user.store');
            Route::put('/update/{id}', [UserController::class, 'update'])->name('user.update');
            Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('user.destroy');
        });
    });

});
