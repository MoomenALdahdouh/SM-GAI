<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::prefix('auth')->group(function () {

    Route::post('/register', [\App\Http\Controllers\Api\AuthController::class, 'register']);
    Route::post('/driver-register', [\App\Http\Controllers\Api\AuthController::class, 'driver_register']);
    Route::post('/login', [\App\Http\Controllers\Api\AuthController::class, 'login']);
});

Route::prefix('password')->group(function (){
    Route::post('/forget-password', [\App\Http\Controllers\Api\AuthController::class, 'forget_password']);
    Route::post('/check-code', [\App\Http\Controllers\Api\AuthController::class, 'check_code']);
});


Route::middleware(['auth:sanctum'])->group(function () {

    Route::post('/reset-password', [\App\Http\Controllers\Api\AuthController::class, 'reset_password']);


    Route::post('/reset-password', [\App\Http\Controllers\Api\AuthController::class, 'reset_password']);
    Route::post('/update-password', [\App\Http\Controllers\Api\AuthController::class, 'update_password']);
    Route::post('/update-profile', [\App\Http\Controllers\Api\AuthController::class, 'update_profile']);

    Route::get('/profile', [\App\Http\Controllers\Api\AuthController::class, 'profile']);
    Route::post('logout', [\App\Http\Controllers\Api\AuthController::class, 'logout']);

    Route::post('/send-complaint', [\App\Http\Controllers\Api\ComplaintController::class, 'store']);
    Route::get('/complaints', [\App\Http\Controllers\Api\ComplaintController::class, 'index']);

    Route::post('/send-order', [\App\Http\Controllers\Api\OrderController::class, 'store']);
    Route::get('/orders', [\App\Http\Controllers\Api\OrderController::class, 'index']);
    Route::post('/send-order-request', [\App\Http\Controllers\Api\OrderController::class, 'send_order_request']);
    Route::post('/accept-driver', [\App\Http\Controllers\Api\OrderController::class, 'accept_driver']);
    Route::post('/cancel-driver', [\App\Http\Controllers\Api\OrderController::class, 'cancel_driver']);
    Route::post('/finish-order', [\App\Http\Controllers\Api\OrderController::class, 'finish_order']);

    Route::get('/introduction', [\App\Http\Controllers\Api\TypesController::class, 'index']);
    Route::get('/transport-heavy', [\App\Http\Controllers\Api\TypesController::class, 'index']);
    Route::get('/transport-light', [\App\Http\Controllers\Api\TypesController::class, 'index']);

});

Route::get('/cities', [\App\Http\Controllers\Api\AuthController::class, 'cities']);

Route::get('/terms-conditions', [\App\Http\Controllers\Api\ComplaintController::class, 'terms_conditions']);
