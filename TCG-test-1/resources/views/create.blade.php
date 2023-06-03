
    <div class="container">
        <h1>Create Customer</h1>

        <form action="{{ route('customer.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" >
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" >
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" >
            </div>
            <div class="form-group">
                <label for="organisation">Organisation</label>
                <input type="text" name="organisation" id="organisation" class="form-control" >
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" >
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>



