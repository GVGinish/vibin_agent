<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PolicyController;


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

Route::get('', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/add_customer_page/{type}', [CustomerController::class, 'index'])->name('add_customer_page');
    Route::post('/add_customer', [CustomerController::class, 'store'])->name('add_customer');
    Route::get('/personal_detail', [CustomerController::class, 'show'])->name('personal_detail');

    Route::get('/policy_list/{id}', [PolicyController::class, 'show'])->name('policy_list');
    Route::get('/policy_schedule/{id}', [PolicyController::class, 'schedule'])->name('policy_schedule');
    Route::get('/pay/{id}', [PolicyController::class, 'update'])->name('pay');
    Route::post('change_status',[PolicyController::class , 'change_status'])->name('change_status');









});

require __DIR__.'/auth.php';
