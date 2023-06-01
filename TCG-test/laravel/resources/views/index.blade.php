<!-- resources/views/customer/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Customer List</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Organisation</th>
                    <th>Date</th>
                    <!-- Add more table columns as per your requirements -->
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>{{ $customer->organisation }}</td>
                        <td>{{ $customer->date }}</td>
                        <!-- Add more table cells as per your requirements -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
