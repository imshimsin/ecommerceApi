<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;



//through Resource api
use App\Http\Controllers\AuthController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::apiResource('products', ProductController::class);
});



// through Specific api 
// Route::prefix('products')->middleware('auth:sanctum')->group(function() {
//     Route::get('/', [ProductController::class, 'index']); // Get all products
//     Route::post('/', [ProductController::class, 'store']); // Create a new product
//     Route::get('/{product}', [ProductController::class, 'show']); // Get a single product
//     Route::put('/{product}', [ProductController::class, 'update']); // Update product
//     Route::delete('/{product}', [ProductController::class, 'destroy']); // Delete product
// });

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
