@extends('layouts.layout')
@section('content')

<div class="container d-flex justify-content-center align-items-center min-vh-100">
      <div class="card signup-card">
        <div class="row no-gutters">
          <div class="col-md-6">
            <div class="card-body signup-card-body">
              <form action="{{route('signup.store')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="name" class="form-label">fullname</label>
                  <input type="text" class="form-control signup-form-control" name="name" id="name"/>
                  @error('name')
                    <div class="text-danger">{{$message}}</div>
                  @enderror</br>
                </div>
                <div class="form-group">
                  <label for="telephone" class="form-label">Telephone</label>
                  <input type="text" class="form-control signup-form-control" name="telephone" id="telephone"/>
                  @error('telephone')
                  <div class="text-danger">{{$message}}</div>
                  @enderror</br>
                </div>
                <div class="form-group">
                  <label for="adresse" class="form-label">Adresse</label>
                  <input type="text" class="form-control signup-form-control" name="adresse" id="adresse"/>
                  @error('adresse')
                    <div class="text-danger">{{$message}}</div>
                  @enderror</br>
                </div>
                <div class="form-group">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control signup-form-control" name="email" id="email"/>
                  @error('email')
                    <div class="text-danger">{{$message}}</div>
                  @enderror</br>
                </div>
                <div class="form-group">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control signup-form-control" name="password" id="password"/>
                  @error('password')
                    <div class="text-danger">{{$message}}</div>
                  @enderror</br>
                </div>
                <div class="form-group">
                  <label for="password_confirmation" class="form-label">Confirm password</label>
                  <input type="password" class="form-control signup-form-control" name="password_confirmation">
                  @error('password_confirmation')
                    <div class="text-danger">{{$message}}</div>
                  @enderror</br>
                </div>
                <br />
                <button type="submit" class="btn btn-primary btn-block signup-btn-primary">Create account</button>
              </form>
            </div>
          </div>
          <div class="col-md-6 d-flex flex-column justify-content-center align-items-center text-white signup-welcome-section">
            <h2>Welcome to LocaCARS</h2>
            <p>Already a user?</p>
            <a href="{{ route('login.index') }}" class="btn btn-outline-light signup-btn-outline-light">Log In</a>
          </div>
        </div>
      </div>
    </div>

@endsection