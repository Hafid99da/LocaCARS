@extends('layouts.layout')
@section('content')

<div class="container d-flex justify-content-center align-items-center min-vh-100">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-6">
            <div class="card-body">
              <form action="{{ route('login.login') }}" method="POST" >
                @csrf
                <div class="form-group ">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control form-control-login" name="email" id="email"/>
                  @error('email')
                    <div class="text-danger">{{$message}}</div>
                  @enderror</br>
                </div>
                <div class="form-group">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control form-control-login" name="password" id="password"/>
                  @error('password')
                    <div class="text-danger">{{$message}}</div>
                  @enderror</br>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="rememberme">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>
                <br />
                <button type="submit" class="btn btn-primary-login btn-block text-white btn-primary-login">Sign In</button>
              </form>
            </div>
          </div>
          <div class="col-md-6 d-flex flex-column justify-content-center align-items-center text-white welcome-section-login">
            <h2>Welcome to Locavo</h2>
            <p>Don't have an account?</p>
            <a href="{{ route('signup') }}" class="btn btn-outline-light btn-outline-light-login" >Sign Up</a>
          </div>
        </div>
      </div>
    </div>
@endsection
