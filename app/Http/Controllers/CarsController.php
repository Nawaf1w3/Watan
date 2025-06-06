<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::get();
  
        return view('dashboard', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function private()
    {
        $cars = Car::where('car_type', 'private')->paginate(6);

        return view('private.list',compact('cars'));
    }
    public function taxi()
    {
        $cars = Car::where('car_type', 'taxi')->get();

        return view('taxi.list',compact('cars'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function showPrivate($id)
    {
        $car  = Car::where('id', $id)->first();
        // dd($car);
        return view('private.show',compact('car'));
    }
    public function showTaxi($id)
    {
        $car  = Car::where('id', $id)->first();
        // dd($car);
        return view('private.show',compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
    }
}
