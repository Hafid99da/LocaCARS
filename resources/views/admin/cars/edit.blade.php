<!DOCTYPE html>
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
            <h2>LocaCARS</h2>
            <a href="{{ route('users.index') }}">Users</a>
            <a href="{{ route('cars.list') }}">Cars</a>
            <a href="{{ route('rentals.index') }}">Rents</a>
            <a href="{{ route('login.logout') }}">Log out</a>
        </div>
        <div class="content flex-grow-1">
            <div class="container">
                <h1>Edit Car</h1>
                <div class="card">
                    <div class="card-header bg-warning text-center text-uppercase fw-bold">Update car</div>
                    <div class="card-body bg-light">
                        <form action="{{ route('cars.update', $car) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" id="id" value="{{$car->id}}"/>
                            
                            <label class="form-label fw-bold">Brand</label></br>
                            <input type="text" name="brand" class="form-control" value="{{ $car->brand }}" ><br>
                   
                            <label class="form-label fw-bold">Model</label></br>
                            <input type="text" name="model" class="form-control" value="{{ $car->model }}" ><br>
                        
                            <label class="form-label fw-bold">Fuel Type</label></br>
                            <select name="fuel_type" class="form-control" value="{{ $car->fuel_type }}" >
                                <option value="">fuel type</option>
                                <option value="gasoline">Gasoline</option>
                                <option value="diesel">Diesel</option>
                            </select></br>
                        
                            <label class="form-label fw-bold">Gearbox</label></br>
                            <select name="gearbox" class="form-control" value="{{ $car->gearbox }}" >
                                <option value="">Select gearbox</option>
                                <option value="manual">Manual</option>
                                <option value="automatic">Automatic</option>
                            </select></br>
                        
                            <label class="fw-bold">Price</label></br>
                            <input type="text" name="price" class="form-control" value="{{ $car->price }}" ><br>
                        
                            <label class="form-label fw-bold">Available</label></br>
                            <select name="available" class="form-control" value="{{ $car->available }}" >
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select></br>
                        
                            <label class="form-label fw-bold">image</label></br>
                            <input type="file" name="image" class="form-control" value="{{ $car->image }}"><br>
                        
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