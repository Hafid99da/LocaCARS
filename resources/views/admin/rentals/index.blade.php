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
            <a href="{{ route('dashboard') }}"><h2>LocaCars</h2></a>
            <a href="{{ route('home') }}">Back to Website</a>
            <a href="{{ route('users.index') }}">Users</a>
            <a href="{{ route('cars.index') }}">Cars</a>
            <a href="{{ route('rentals.index') }}">Rents</a>
            <a href="{{ route('login.logout') }}">Log out</a>
        </div>
        <div class="content flex-grow-1">
            <div class="container">
                <h1>Hi, Admin</h1>
                <h5 class="text-muted">Dashboard(Renatls)</h5>
                <div class="table-container">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Rental date</th>
                                <th>Return date</th>
                                <th>Total price</th>
                                <th>Client name</th>
                                <th>Car Brand/model</th>
                                <th>Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rentals as $rental)
                                <tr>
                                    <td>{{ $rental->id }}</td>
                                    <td>{{ $rental->rental_date }}</td>
                                    <td>{{ $rental->return_date }}</td>
                                    <td>{{ $rental->total_price }}</td>
                                    <td>{{ $rental->user->name }}</td>
                                    <td>{{ $rental->car->brand }}/{{ $rental->car->model }}</td>
                                    <td>
                                        <a href="{{ route('rentals.edit', $rental) }}" class="btn btn-success btn-sm">Edit</a>
                                        <form action="{{ route('rentals.destroy', $rental) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>