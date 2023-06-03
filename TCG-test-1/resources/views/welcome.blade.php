<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <!-- <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />  -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <p>Here are the customer entries:</p>

        <table>
            <!-- Table header -->
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Organisation</th>
                    <th>Date of Birth</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop through each customer and display their information in table rows -->
                @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>{{ $customer->organisation }}</td>
                    <td>{{ $customer->date_of_birth }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{ $customers->links() }}

        <!-- Navigation button to the create page -->
        <a href="{{ route('customer.create') }}" class="btn btn-primary mt-3">Create Customer</a>

    </div>
</body>

</html>
