<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ValetController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/valets/create', [ValetController::class, 'create'])->name('valets.create');
Route::post('/valets', [ValetController::class, 'store'])->name('valets.store');
Route::get('/valets/{valet}', [ValetController::class, 'show'])->name('valets.show');

Route::middleware('auth')->group(function () {
    Route::get('/valets', [ValetController::class, 'index'])->name('valets.index');
    Route::get('/valets/{valet}/edit', [ValetController::class, 'edit'])->name('valets.edit');
    Route::patch('/valets/{valet}', [ValetController::class, 'update'])->name('valets.update');
    Route::delete('/valets/{valet}', [ValetController::class, 'destroy'])->name('valets.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
