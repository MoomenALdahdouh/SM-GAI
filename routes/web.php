<?php

use App\Http\Controllers\Admin\Role\RoleController;
use App\Http\Controllers\Admin\UserController;
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


Auth::routes();

Route::get('/index', function () {
    return view('page.web_page');
})->name("index");

Route::group(
    [
        'middleware' => ['auth']
    ], function () {

//    Route::get('/', function () {
//        return view('index');
//    });


    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index']);
    Route::get('/home', [\App\Http\Controllers\Admin\HomeController::class, 'index']);

    Route::get('/introduction/deleted', [\App\Http\Controllers\Admin\TypesController::class, 'delete']);
    Route::delete('/introduction/restore/{id}', [\App\Http\Controllers\Admin\TypesController::class, 'restore']);
    Route::resource('/introduction', \App\Http\Controllers\Admin\TypesController::class);

    Route::delete('/transport-heavy/restore/{id}', [\App\Http\Controllers\Admin\TypesController::class, 'restore']);
    Route::get('/transport-heavy/deleted', [\App\Http\Controllers\Admin\TypesController::class, 'delete']);
    Route::resource('/transport-heavy', \App\Http\Controllers\Admin\TypesController::class);

    Route::delete('/transport-light/restore/{id}', [\App\Http\Controllers\Admin\TypesController::class, 'restore']);
    Route::get('/transport-light/deleted', [\App\Http\Controllers\Admin\TypesController::class, 'delete']);
    Route::resource('/transport-light', \App\Http\Controllers\Admin\TypesController::class);


    Route::get('/drivers/details-{id}', [\App\Http\Controllers\Admin\CustomerController::class, 'show']);
    Route::get('/drivers-deleted', [\App\Http\Controllers\Admin\CustomerController::class, 'delete'])->name('drivers-deleted');
    Route::delete('/drivers/restore/{id}', [\App\Http\Controllers\Admin\CustomerController::class,'restore']);
    Route::resource('/drivers', \App\Http\Controllers\Admin\CustomerController::class);


    Route::get('/customers-deleted', [\App\Http\Controllers\Admin\CustomerController::class, 'delete'])->name('customers-deleted');
    Route::delete('/customers/restore/{id}', [\App\Http\Controllers\Admin\CustomerController::class,'restore']);
    Route::resource('/customers', \App\Http\Controllers\Admin\CustomerController::class);

    Route::resource('/taxes', \App\Http\Controllers\Admin\TaxController::class);
    Route::get('/cities/deleted', [\App\Http\Controllers\Admin\CityController::class,'delete']);
    Route::delete('/cities/restore/{id}', [\App\Http\Controllers\Admin\CityController::class,'restore']);

    Route::resource('/cities', \App\Http\Controllers\Admin\CityController::class);
    Route::resource('/terms-conditions', \App\Http\Controllers\Admin\SettingController::class);
    Route::resource('/notifications', \App\Http\Controllers\Admin\NotificationController::class);
    Route::resource('/complains-suggestion', \App\Http\Controllers\Admin\ComplaintController::class);
    Route::resource('/orders', \App\Http\Controllers\Admin\OrderController::class);
    Route::resource('/profile', \App\Http\Controllers\Admin\ProfileController::class);



    Route::get('/PersonalInformation', function () {
        return view('admin.PersonalInformation.index');
    });

    Route::resource('users', UserController::class);


});

