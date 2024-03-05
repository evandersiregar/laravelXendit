<?php

use App\Http\Controllers\PaymentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all off them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post("/payments", [PaymentController::class,"store"]);
Route::post("/payments/notification", [PaymentController::class,"notification"]);