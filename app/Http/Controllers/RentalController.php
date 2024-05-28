<?php

namespace App\Http\Controllers;

use App\Models\Rental;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rentals = Rental::all();
        return view('admin.rentals.index', compact('rentals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'rental_date' => 'required|date',
            'return_date' => 'required|date|after_or_equal:rental_date',
            'total_price' => 'required|numeric',
            'car_id' => 'required|numeric',
            'user_id' => 'required|numeric',
        ]);

        // Store the rental data
        $rental = new Rental();
        $rental->rental_date = $request->rental_date;
        $rental->return_date = $request->return_date;
        $rental->total_price = $request->total_price;
        $rental->car_id = $request->car_id;
        $rental->user_id = $request->user_id;
        $rental->save();


        return redirect()->route('home')->with('success', 'Car rental confirmed!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rental $rental)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rental $rental)
    {
        return view('admin.rentals.edit', compact('rental'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rental $rental)
    {
        $request->validate([
            'rental_date' => 'required|date',
            'return_date' => 'required|date|after_or_equal:rental_date',
            'total_price' => 'required|numeric',
            'car_id' => 'required|numeric',
            'user_id' => 'required|numeric',
        ]);

        $rental = Rental::find($rental->id);
        $rental->update($request->all());

        return redirect()->route('dashboard.rentals.index')->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rental $rental)
    {
        Rental::destroy($rental->id);

        return redirect()->route('dashboard.rentals.index')->with('success', 'User deleted successfully.');
    }
}
