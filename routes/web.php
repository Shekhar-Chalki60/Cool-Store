<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/cart/add/{product}', [CartController::class, 'add'])
        ->name('cart.add');
    Route::post('/cart/increase/{id}', [CartController::class, 'increase'])
        ->name('cart.increase');
    Route::post('/cart/decrease/{id}', [CartController::class, 'decrease'])
        ->name('cart.decrease');
    Route::post('/cart/remove/{id}', [CartController::class, 'remove'])
        ->name('cart.remove');
    Route::get('/checkout', [CheckoutController::class, 'index'])
        ->name('checkout');
    Route::post('/checkout', [CheckoutController::class, 'store'])
        ->name('checkout.store');
    Route::get('/payment/{order}', [PaymentController::class, 'show'])
        ->name('payment.show');

    Route::post('/payment/{order}', [PaymentController::class, 'process'])
        ->name('payment.process');

    Route::get('/success/{order}', [PaymentController::class, 'success'])
        ->name('payment.success');
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');
    Route::get('/dashboard/orders', [DashboardController::class, 'orders'])
        ->name('dashboard.orders');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::get('/cart', [CartController::class, 'index'])
    ->name('cart');

require __DIR__.'/auth.php';
