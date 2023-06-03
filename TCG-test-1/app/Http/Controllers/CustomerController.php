<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Log;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        try {
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
        } catch (\Exception $e) {
            Log::error('Error occurred while fetching customers: ' . $e->getMessage());
        }
    }

    public function create()
    {
        try {
            $customers = Customer::all(); // Retrieves all customers from the database

            return view('create', compact('customers'));
        } catch (\Exception $e) {
            Log::error('Error occurred while retrieving customers: ' . $e->getMessage());
        }
    }

    public function store(Request $request)
    {
        try {
            $customer = Customer::create($request->all());
        
            // Redirects to the 'customer.index' route with a success message
            return redirect()->route('welcome')->with('success', 'Customer created successfully!');
        } catch (\Exception $e) {
            Log::error('Error occurred while storing customer: ' . $e->getMessage());
        }
    }

    public function show(Customer $customer)
    {
        try {
            // Passes the specific customer data to the 'customer.show' view
            return view('customer.show', ['customer' => $customer]);
        } catch (\Exception $e) {
            Log::error('Error occurred while fetching customer details: ' . $e->getMessage());
        }
    }
}
