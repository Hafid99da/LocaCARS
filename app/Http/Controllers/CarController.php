<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return view('pages.bookcars', compact('cars'));
    }

///////////////////////////////

    public function carsList()
    {
        $cars = Car::all();
        return view('admin.cars.index', compact('cars'));
    }

///////////////////////////////

    public function carDetails(Car $car){
        if(Auth::user()){
            $car = Car::find($car->id);
            return view('pages.carDetails', compact('car'));
        }else{
            return redirect()->route('login.index');
        };
        
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
            'brand' => $request->brand,
            'model' => $request->model ,
            'fuel_type' => $request->fuel_type,
            'gearbox' => $request->gearbox,
            'price' => $request->price,
            'available' => $request->available,
            'image' => $path.$filename
        ]);
        return redirect()->route('cars.index')->withInput(); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
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
            'brand' => 'required',
            'model' => 'required',
            'fuel_type' => 'required',
            'gearbox' => 'required',
            'price' => 'required',
            'available' => 'required',
            'image' => 'nullable|mimes:png,jpg,jpeg'
        ]);

        $car = Car::find($car->id);

        
        if($request->has('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename= time() . "." .$extension;

            $path = "images/";
            $file->move($path, $filename);

            if(File::exists($car->image)){
                File::delete($car->image);
            }
            $car->update([
                'brand' => $request->brand,
                'model' => $request->model ,
                'fuel_type' => $request->fuel_type,
                'gearbox' => $request->gearbox,
                'price' => $request->price,
                'available' => $request->available,
                'image' => $path.$filename
            ]);
        }
        $car->update([
            'brand' => $request->brand,
            'model' => $request->model ,
            'fuel_type' => $request->fuel_type,
            'gearbox' => $request->gearbox,
            'price' => $request->price,
            'available' => $request->available
        ]);
        return redirect()->route('cars.list')->with('success', 'Car updated successfully.'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        Car::destroy($car->id);
        if(File::exists($car->image)){
            File::delete($car->image);
        }
        return redirect()->route('cars.list')->with('success', 'User deleted successfully.');
    }
}
