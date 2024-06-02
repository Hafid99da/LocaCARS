@extends('layouts.layout')
@section('content')
    <div class="car-details-card">
            <img src="{{ asset($car->image) }}" alt="{{ $car->brand }}">
            <div class="car-details-body">
                <h3 class="text-center">{{ $car->brand }}</h3>
                <form action="{{ route('rentalCars.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="rental_date" class="form-label">Rental date</label>
                        <input type="date" class="form-control" id="rental_date" name="rental_date">
                    </div>
                    <div class="mb-3">
                        <label for="return_date" class="form-label">Return date</label>
                        <input type="date" class="form-control" id="return_date" name="return_date">
                    </div>
                    <div class="mb-3 d-flex justify-content-center align-items-center">
                        <p class="p-3">Gearbox: <strong>{{ $car->gearbox }}</strong></p>
                        <p class="p-3">Type: <strong>{{ $car->fuel_type }}</strong></p>
                        <p class="p-3">Available: <strong>{{ $car->available() }}</strong></p>
                        <p class="p-3">price: <strong>{{ $car->price }}</strong></p>
                    </div>
                    <div class="mb-3 text-center">
                        <p>Total: <strong id="total-price">0.00 DH</strong></p>
                        <input type="hidden" id="total_price" name="total_price" value="0">
                        <input type="hidden" name="car_id" value="{{ $car->id }}">
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    </div>
                    <div class="mb-3 text-center m-5 p-5">
                        <button type="submit" class="btn btn-warning" style="width: 100%;" {{$car->available() === 'No' ? 'disabled' : ''}}>Confirm rent</button>
                    </div>
                </form>
            </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const rentalDateInput = document.getElementById('rental_date');
            const returnDateInput = document.getElementById('return_date');
            const totalPriceElement = document.getElementById('total-price');
            const totalPriceInput = document.getElementById('total_price');
            const carPricePerDay = {{ $car->price }};
        

            function calculateTotalPrice() {
                const rentalDate = new Date(rentalDateInput.value);
                const returnDate = new Date(returnDateInput.value);

                if (rentalDate && returnDate && rentalDate <= returnDate) {
                    const timeDiff = Math.abs(returnDate - rentalDate);
                    const diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24)) + 1; // including the return day
                    const totalPrice = diffDays * carPricePerDay;
                    totalPriceElement.textContent = `${totalPrice.toFixed(2)} DH`;
                    totalPriceInput.value = totalPrice.toFixed(2);
                } else {
                    totalPriceElement.textContent = '0.00 DH';
                    totalPriceInput.value = 0;
                }
            }

            rentalDateInput.addEventListener('change', calculateTotalPrice);
            returnDateInput.addEventListener('change', calculateTotalPrice);
        });

    </script>
@endsection