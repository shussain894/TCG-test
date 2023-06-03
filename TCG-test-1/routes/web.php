<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;

Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::post('/customer', [CustomerController::class, 'store'])->name('customer.store');
Route::get('/customer', [CustomerController::class, 'index'])->name('customer.index');

Route::get('/', function () {
     // Retrieves all customers from the database
     $customers = Customer::all();

     // Passes the customers data to the 'welcome' view
     return view('welcome', ['customers' => $customers]);
})->name('welcome');


// Route::post('/customer/store', [CustomerController::class, 'store'])->name('customer.store');