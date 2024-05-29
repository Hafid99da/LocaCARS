<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LocaCARS - Rent a Car</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
  <script src="https://kit.fontawesome.com/182a9bb056.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="d-flex">
        <div class="sidebar p-3">
            <h2>LocaCARS</h2>
            <a href="{{ route('users.index') }}">Users</a>
            <a href="{{ route('cars.list') }}">Cars</a>
            <a href="{{ route('rentals.index') }}">Rents</a>
            <a href="{{ route('login.logout') }}">Log out</a>
        </div>
        <div class="content flex-grow-1">
            <div class="container">
                <h1>Edit Rentals</h1>
                <div class="card">
                    <div class="card-header bg-warning text-center text-uppercase fw-bold">Update Rental Information</div>
                    <div class="card-body bg-light">
                        <form action="{{ route('rentals.update', $rental) }}" method="post">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" id="id" value="{{$rental->id}}"/>
                            <div class="mb-3">
                                <label for="rental_date" class="form-label fw-bold">Rental date</label>
                                <input type="date" class="form-control" name="rental_date" value="{{ $rental->rental_date }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="return_date" class="form-label fw-bold">Return date</label>
                                <input type="date" class="form-control" name="return_date" value="{{ $rental->return_date }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="total_price" class="form-label fw-bold">Total price</label>
                                <input type="number" class="form-control" name="total_price" value="{{ $rental->total_price }}" required>
                            </div>
                            <input type="hidden" name="car_id" value="{{$rental->car_id}}"/>
                            <input type="hidden" name="user_id" value="{{$rental->user_id}}"/>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary px-5">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>