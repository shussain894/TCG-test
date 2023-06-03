<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\CustomerApiController;

// Define the API routes for the 'customers' resource
Route::apiResource('customers', CustomerApiController::class);

// Define a route to retrieve the authenticated user
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
