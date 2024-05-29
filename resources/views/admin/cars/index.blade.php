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
            <h2>LocaCars</h2>
            <a href="{{ route('users.index') }}">Users</a>
            <a href="{{ route('cars.list') }}">Cars</a>
            <a href="{{ route('rentals.index') }}">Rents</a>
            <a href="{{ route('login.logout') }}">Log out</a>
        </div>
        <div class="content flex-grow-1">
            <div class="container">
                <h1>Hi, Admin</h1>
                <div class="table-container">
                <a href="{{ route('cars.create') }}" class="btn btn-primary ">
                    <i class="fa fa-plus" aria-hidden="true"></i>Add new car
                </a><br>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>image</th>
                                <th>brand</th>
                                <th>model</th>
                                <th>fuel_type</th>
                                <th>gearbox</th>
                                <th>price</th>
                                <th>available</th>
                                <th>Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cars as $car)
                                <tr>
                                    <td>{{ $car->id }}</td>
                                    <td>{{ $car->image }}</td>
                                    <td>{{ $car->brand }}</td>
                                    <td>{{ $car->model }}</td>
                                    <td>{{ $car->fuel_type }}</td>
                                    <td>{{ $car->gearbox }}</td>
                                    <td>{{ $car->price }}</td>
                                    <td>{{ $car->available }}</td>
                                    <td>
                                        <a href="{{ route('cars.edit', $car) }}" class="btn btn-success btn-sm">Edit</a>
                                        <form action="{{ route('cars.destroy', $car) }}" method="POST" style="display:inline;">
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