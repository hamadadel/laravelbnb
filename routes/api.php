<?php

use App\Models\Bookable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{BookableController, BookableAvailabilityController};
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/bookables', [BookableController::class, 'index']);

//https://kinsta.com/blog/laravel-model-factories/
Route::Get('/bookables/{id}', [BookableController::class, 'show']);


Route::apiResource('bookables', BookableController::class);
// Check availability
Route::get('/bookables/{id}/availability', BookableAvailabilityController::class)
    ->name('bookables.availability');
