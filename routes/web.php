<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\product\OptionController;
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
    // return view('dashboard.index');
    // return view('welcome');
    // return view('web.index');
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

require __DIR__.'/auth.php';

Route::prefix('/admin')->namespace('Admin')->group(function(){
    
    // Admin Login route
    Route::match(['get', 'post'], '/signin', [AdminController::class, 'signin'])->name('admin.signin');
    Route::group(['middleware'=>['admin']], function(){
        
        // Admin dashboard route
        Route::get('/dashboard-index', [AdminController::class, 'dashboard'])->name('admin.dashboard-index');

        // Update admin password
        Route::match(['get', 'post'], '/update-admin-password', [AdminController::class, 'updateAdminPassword'])
        ->name('admin.update-admin-password');

        // Check admin password
        Route::post('check-admin-password', [AdminController::class, 'checkAdminPassword'])
        ->name('admin.check-admin-password');

        // Update admin details
        Route::match(['get', 'post'], '/update-admin-details', [AdminController::class, 'updateAdminDetails'])
        ->name('admin.update-admin-details');

        //Update vendor details
        Route::match(['get', 'post'], '/update-vendor-details/{slug}', [AdminController::class, 'updateVendorDetails'])
        ->name('admin.update-vendor-details/{slug}');

        // View Admins / Subadmins / Vendors
        Route::get('/admins/{type?}',[AdminController::class, 'admins'])->name('admin.admins/{type?}');

        // View vendor Details
        Route::get('/view-vendor-details/{id}', [AdminController::class, 'viewVendorDetails'])->name('admin.admins.view-vendor-details');

        // Update admin status
        Route::post('/update-admin-status', [AdminController::class, 'updateAdminStatus'])->name('updateAdminStatus');
      
        // Admin logout
        Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
    });
});


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





/*=====================  Localization  ==============*/
Route::get("/locale", [LocalizationController::class, 'setLang'])->name('swap_language');

/*=====================  favoraite  ==============*/
Route::get("favoraite/{ID}/{customerId}", [FavoraiteController::class, 'store'])->name('favoraite');

// * Route for dashboard
Route::get('/{page}', [AdminController::class, 'index']);
