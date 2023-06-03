<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Log;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $filter = $request->input('filter');

        $query = Customer::query();

        // Applies filters based on user selection
        if ($filter === 'name') {
            $query->orderBy('name');
        } elseif ($filter === 'organisation') {
            $query->orderBy('organisation');
        } elseif ($filter === 'date_of_birth') {
            $query->orderBy('date_of_birth');
        }

        $customers = $query->get();

        return view('welcome', compact('customers'));
    }

    public function create()
    {
        $customers = Customer::all(); // Retrieves all customers from the database

        return view('create', compact('customers'));
    }

    public function store(Request $request)
    {
        $customer = Customer::create($request->all());
    
        // Redirects to the 'customer.index' route with a success message
        return redirect()->route('welcome')->with('success', 'Customer created successfully!');
    }
    

    public function show(Customer $customer)
    {
        // Passes the specific customer data to the 'customer.show' view
        return view('customer.show', ['customer' => $customer]);
    }
}
