<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LocamaCars - Rent a Car</title>
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
                <h1>Add Car</h1>
                <div class="card">
                    <div class="card-header bg-warning text-center text-uppercase fw-bold">Add new car</div>
                    <div class="card-body bg-light">

                        <form action="{{ route('cars.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label class="form-label fw-bold">Brand</label></br>
                            <input type="text" name="brand" class="form-control">
                            @error('brand')
                                <div class="text-danger">{{$message}}</div>
                            @enderror</br>
                            <label class="form-label fw-bold">model</label></br>
                            <input type="text" name="model" class="form-control">
                            @error('model')
                                <div class="text-danger">{{$message}}</div>
                            @enderror</br>
                            <label class="form-label fw-bold">Fuel Type</label></br>
                            <select name="fuel_type" class="form-control">
                                <option value="">fuel type</option>
                                <option value="gasoline">Gasoline</option>
                                <option value="diesel">Diesel</option>
                            </select></br>
                            @error('fuel_type')
                                <div class="text-danger">{{$message}}</div>
                            @enderror</br>
                            <label class="form-label fw-bold">Gearbox</label></br>
                            <select name="gearbox" class="form-control">
                                <option value="">Select gearbox</option>
                                <option value="manual">Manual</option>
                                <option value="automatic">Automatic</option>
                            </select></br>
                            @error('gearbox')
                                <div class="text-danger">{{$message}}</div>
                            @enderror</br>
                            <label class="form-label fw-bold">price</label></br>
                            <input type="number" name="price" class="form-control">
                            @error('price')
                                <div class="text-danger">{{$message}}</div>
                            @enderror</br>
                            <label class="form-label fw-bold">Available</label></br>
                            <select name="available" class="form-control">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select></br>
                            @error('available')
                                <div class="text-danger">{{$message}}</div>
                            @enderror</br>
                            <label class="form-label fw-bold">image</label></br>
                            <input type="file" name="image" class="form-control">
                            @error('image')
                                <div class="text-danger">{{$message}}</div>
                            @enderror</br>
                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary px-5">Submit</button>
                            </div>
                        </form>

                      </div>
                    </div>
            </div>
        </div>
    </div>
    </body>
</html>