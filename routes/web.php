<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\dashboard\AdminController;
use App\Http\Controllers\product\ProductController;
use App\Http\Controllers\product\CategoryController;
use App\Http\Controllers\product\ClassificationController;

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

Route::get('/', function () {
    // return view('dashboard.empty');
    // return view('welcome');
    return view('website.index');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
/**************************************************************************************************************/
require __DIR__.'/auth.php';



/***********************************************   website  **************************************************/

/*=====================   category ==============*/
Route::resource('category', CategoryController::class);

/*=====================   classification ==============*/
Route::resource('classification', ClassificationController::class);

/*=====================   product ==============*/
Route::resource('product', ProductController::class);

// Route::get('/details/{id}', [App\Http\Controllers\product\ProductController::class, 'details'])->name('details');





// * Route for dashboard
Route::get('/{page}', [AdminController::class, 'index']);
