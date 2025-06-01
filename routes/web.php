<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::controller(MainController::class)->group(function(){
    Route::get('/', 'home_page')->name('home_page');
Route::get('/404','page_404')->name('page_404');
Route::get('/about','about_page')->name('about_page');
Route::get('/cart','cart_page')->name('cart_page');
Route::get('/checkout','checkout_page')->name('checkout_page');
Route::get('/contact','contact_page')->name('contact_page');
Route::get('/news','news_page')->name('news_page');
Route::get('/shop','shop_page')->name('shop_page');
Route::get('/single_news','single_news_page')->name('single_news_page');
Route::get('/single_product','single_product_page')->name('single_product_page');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
