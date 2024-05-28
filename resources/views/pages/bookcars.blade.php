@extends('layouts.layout')
@section('content')
<div class="container">
<div class="row">
    @foreach($cars as $car)
        <div class="col-md-4 text-center">
            <div class="car-card">
                <img src="{{ asset($car->image) }}" alt="{{ $car->brand }}">
                <div class="car-card-body">
                    <h5 class="card-title">{{ $car->brand }}</h5>
                    <p class="card-text">{{ $car->price }} DH /day</p>
                    <p class="card-text"><small class="text-muted">{{ $car->model }}</small></p>
                    <a href="{{ route('cars.details', $car) }}" class="btn btn-warning">Rent now</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
</div>
@endsection