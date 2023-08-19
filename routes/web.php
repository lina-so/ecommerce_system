<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\product\OptionController;
use App\Http\Controllers\dashboard\AdminController;
use App\Http\Controllers\product\ProductController;
use App\Http\Controllers\product\CategoryController;
use App\Http\Controllers\product\FavoraiteController;
use App\Http\Controllers\product\OptionValueController;
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
    return view('web.pages.index');
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



/***********************************************   Dashboard  **************************************************/

/*=====================   category ==============*/
Route::resource('category', CategoryController::class);

/*=====================   classification ==============*/
Route::resource('classification', ClassificationController::class);

/*=====================   product ==============*/
Route::resource('product', ProductController::class);

/*=====================   option ==============*/
Route::resource('option', OptionController::class);

/*=====================   option value==============*/
Route::resource('option_value', OptionValueController::class);

/***********************************************   website  **************************************************/

/*=====================   product details ==============*/
// Route::get('/details/{id}', [App\Http\Controllers\product\ProductController::class, 'details'])->name('details');

/*=====================   Add option   ==============*/

Route::get('product_options/{id}', [OptionValueController::class, 'getOption'])->name('getOption');

Route::get('/get_option_value/{id}',[OptionValueController::class,'getOptionValue'])->name('get_option_value');

Route::post('add_option',[OptionValueController::class,'addOption'])->name('addOption');

/*=====================  favoraite  ==============*/
// Route::get("favoraite/{ID}/{customerId}", [FavoraiteController::class, 'store'])->name('favoraite')->middleware('auth');
Route::get("favoraite/{ID}/{customerId}", [FavoraiteController::class, 'store'])->name('favoraite');



/*=====================  Localization  ==============*/
Route::get("/locale", [LocalizationController::class, 'setLang'])->name('swap_language');



// * Route for dashboard
Route::get('/{page}', [AdminController::class, 'index']);
