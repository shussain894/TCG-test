<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();

        return view('customer.index', ['customers' => $customers]);
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        // This will validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'organisation' => 'required|string',
            'date' => 'required|string',
            // Add more validation rules as per requirements here
        ]);

        // This will create a new customer record
        $customer = Customer::create($validatedData);

        return redirect()->route('customer.index')->with('success', 'Customer created successfully!');
    }

    public function show(Customer $customer)
    {
        return view('customer.show', ['customer' => $customer]);
    }
}
