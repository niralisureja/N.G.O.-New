<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;


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

// Home route
Route::get('/', [IndexController::class, 'index']);

// Event routes// Event routes
Route::prefix('event')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('event.index');
    Route::get('/create', [IndexController::class, 'create'])->name('event.create');
    Route::post('/store', [IndexController::class, 'store'])->name('event.store');
    Route::put('/update/{id}', [IndexController::class, 'update'])->name('event.update');
    Route::delete('/delete/{id}', [IndexController::class, 'destroy'])->name('event.delete');
});

// Donate route
Route::get('/donate', [IndexController::class, 'donate'])->name('donate');
