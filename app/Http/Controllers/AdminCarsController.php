<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Rental;
use Illuminate\Http\Request;

class AdminCarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function carsList()
    {
        $cars = Car::all();
        return view('admin.cars.index', compact('cars'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'fuel_type' => 'required',
            'gearbox' => 'required',
            'price' => 'required',
            'available' => 'required',
            'image' => 'nullable|mimes:png,jpg,jpeg'
            ]);
        
        if($request->has('image')){
            $file = $request->file('image');
            $extension = $file -> getClientOriginalExtension();
            $filename= time() . "." .$extension;
            $path = "images/";
            $file->move($path, $filename);
        }

        Car::create([
            'brand' => $request->nom,
            'model' => $request->adresse ,
            'fuel_type' => $request->telephone,
            'gearbox' => $request->telephone,
            'price' => $request->telephone,
            'available' => $request->telephone,
            'image' => $path.$filename
        ]);
        return redirect()->route('cars.index')->withInput(); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view('admin.cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        $request->validate([
            'rental_date' => 'required|date',
            'return_date' => 'required|date|after_or_equal:rental_date',
            'total_price' => 'required|numeric',
            'car_id' => 'required|numeric',
            'user_id' => 'required|numeric',
        ]);

        $car = Car::find($car->id);
        $car->update($request->all());

        return redirect()->route('cars.index')->with('success', 'User updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        Car::destroy($car->id);

        return redirect()->route('cars.index')->with('success', 'User deleted successfully.');
    }
}
