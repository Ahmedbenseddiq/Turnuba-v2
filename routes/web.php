<?php

use App\Http\Controllers\barberShopController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\barberController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'role:owner'])->group(function () {
    Route::get('/owner/dashboard', [ownerController::class, 'index'])->name('owner.dashboard');

    Route::get('owner/barberShop', [barberShopController::class, 'getMyBarberShops'])->name('barberShop.index');
    Route::get('owner/barberShop/create', [barberShopController::class, 'create'])->name('barberShop.create');
    Route::post('owner/barberShop', [barberShopController::class, 'store'])->name('barberShop.store');
    Route::get('owner/barberShop/{barberShop}', [barberShopController::class, 'show'])->name('barberShop.show');
    Route::get('owner/barberShop/{barberShop}/edit', [barberShopController::class, 'edit'])->name('barberShop.edit');
    Route::put('owner/barberShop/{barberShop}', [barberShopController::class, 'update'])->name('barberShop.update');
    Route::delete('owner/barberShop/{barberShop}', [barberShopController::class, 'destroy'])->name('barberShop.destroy');
});

Route::middleware(['auth', 'role:barber'])->group(function () {
    Route::get('/barber/dashboard', [barberController::class, 'index'])->name('barber.dashboard');
});

Route::middleware(['auth', 'role:client'])->group(function () {
    Route::get('/client/dashboard', [clientController::class, 'index'])->name('client.dashboard');
});



require __DIR__.'/auth.php';
