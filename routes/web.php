<?php


use App\Http\Controllers\OfferController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuctionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CategoryController;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    //Route::resource('auction', AuctionController::class);
    Route::get('/auction/create',[AuctionController::class, 'create'])->name('auction.create');
    Route::post('/auction',[AuctionController::class, 'store'])->name('auction.store');
   
    Route::post('/offer', [OfferController::class, 'store'])->name('offer.store');
});
Route::get('/auction/{auction}',[AuctionController::class, 'show'])->name('auction.show');
Route::get('/user/{user}',[AuctionController::class, 'show'])->name('user.show');
Route::resource('category', CategoryController::class);


require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
