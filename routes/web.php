<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\FallbackController;


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
    return view('auth.login');
});

Auth::routes();

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/showform', [PagesController::class, 'showform_page'])->name('showform');
    // Route::get('/readform', [PagesController::class, 'readform_page/{id}'])->name('readform');
    Route::get('/updateform/{id}', [PagesController::class, 'updateform_page'])->name('updateform');

    //update action
    Route::patch('/updateform/{id}', [PagesController::class, 'update'])->name('update');
    Route::delete('/showform/{id}', [PagesController::class, 'destroy'])->name('delete');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/form', [PagesController::class, 'form_page'])->name('form');

// Route::get('/showform', [PagesController::class, 'showform_page'])->name('showform');

Route::get('/profile', [PagesController::class, 'profile_page'])->name('profile');

Route::get('/showread', [PagesController::class, 'showread_page'])->name('showread');



Route::fallback(FallbackController::class);

//Store action
Route::post('/form', [PagesController::class, 'store'])->name('store');