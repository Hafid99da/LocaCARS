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
            <a href="{{ route('dashboard') }}"><h2>LocaCars</h2></a>
            <a href="{{ route('home') }}">Back to Website</a>
            <a href="{{ route('users.index') }}">Users</a>
            <a href="{{ route('cars.index') }}">Cars</a>
            <a href="{{ route('rentals.index') }}">Rents</a>
            <a href="{{ route('login.logout') }}">Log out</a>
        </div>
        <div class="content flex-grow-1">
            <div class="container">
                <h1>Edit User</h1>
                <div class="card">
                    <div class="card-header bg-warning text-center text-uppercase fw-bold">Update User Information</div>
                    <div class="card-body bg-light">
                        <form action="{{ route('users.update', $user) }}" method="post">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" id="id" value="{{$user->id}}"/>
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">Fullname</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="telephone" class="form-label fw-bold">Telephone</label>
                                <input type="text" class="form-control" id="telephone" name="telephone" value="{{ $user->telephone }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="adresse" class="form-label fw-bold">Adresse</label>
                                <input type="text" class="form-control" id="adresse" name="adresse" value="{{ $user->adresse }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label fw-bold">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                            </div>
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