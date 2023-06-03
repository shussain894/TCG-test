<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;

// Each route returns an error response or redirects to an error page

Route::get('/customer/create', function () {
    try {
        return (new CustomerController())->create();
    } catch (\Exception $e) {
        Log::error('An exception occurred: ' . $e->getMessage());
    }
})->name('customer.create');

Route::post('/customer', function (\Illuminate\Http\Request $request) {
    try {
        return (new CustomerController())->store($request);
    } catch (\Exception $e) {
        Log::error('An error occurred: ' . $e->getMessage());
    }
})->name('customer.store');

Route::get('/customer', function (\Illuminate\Http\Request $request) {
    try {
        return (new CustomerController())->index($request);
    } catch (\Exception $e) {
        Log::error('An error occurred: ' . $e->getMessage());
    }
})->name('customer.index');

Route::get('/', function () {
    try {
        $customers = Customer::all();
        return view('welcome', ['customers' => $customers]);
    } catch (\Exception $e) {
        Log::error('An error occurred: ' . $e->getMessage());
    }
})->name('welcome');