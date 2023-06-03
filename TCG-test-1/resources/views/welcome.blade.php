<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2>Here are the customer entries:</h2>

        <!-- Filter form -->
        <form action="{{ route('customer.index') }}" method="GET">
            <div class="form-group">
                <label for="filter">Filter By:</label>
                <select name="filter" id="filter" class="form-control">
                    <option value="">-- Select Filter --</option>
                    <option value="name">Name</option>
                    <option value="organisation">Organisation</option>
                    <option value="date_of_birth">Date of Birth</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Apply Filter</button>
        </form>

        <table>
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

        <!-- Navigation button to the create page -->
        <a href="{{ route('customer.create') }}" class="btn btn-primary mt-3">Create Customer</a>
    </div>
</body>

</html>
