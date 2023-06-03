<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Log;

class CustomerController extends Controller
{
    public function index()
    {
        // Retrieves all customers from the database
        $customers = Customer::all();

        // Passes the customers data to the 'customer.index' view
        return view('index', ['customers' => $customers]);
    }

    // test

    public function create()
    {
        $customers = Customer::all(); // Retrieve all customers from the database

        return view('create', compact('customers'));
    }

    public function store(Request $request)
    {
        Log::error('This is 1st error message.');
        Log::error($request);
        $customer = Customer::create($request->all());
    
        // Redirects to the 'customer.index' route with a success message
        return redirect()->route('welcome')->with('success', 'Customer created successfully!');
    }
    

    public function show(Customer $customer)
    {
        // Pass the specific customer data to the 'customer.show' view
        return view('customer.show', ['customer' => $customer]);
    }
}
