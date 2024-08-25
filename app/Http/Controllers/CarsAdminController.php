<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarsAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
     
        // foreach($cars as $car){
        //     dd($car->images);
        // }
        return view('Admin.list', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'merk' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'color' => 'required|string|max:255',
            'license_plate' => 'required|string|max:255',
            'vin' => 'nullable|string|max:255',
            'daily_rate' => 'required|numeric|min:0',
            'status' => 'required|string|in:beschikbaar,verhuurd,onderhoud',
            'kilometers' => 'required|integer|min:0',
            'fuel_type' => 'required|string|in:petrol,die-sel,electric',
            'transmission_type' => 'required|string|in:handmatig,automatisch',
            'image_1' => 'nullable',
            'image_2' => 'nullable',
            'image_3' => 'nullable',
            'image_4' => 'nullable',
            'image_5' => 'nullable',
            'hp' => 'nullable|integer|min:0',
            'insurance' => 'nullable|string|max:255',
        ]);
    
            // Generate directory name based on merk and model
            $directoryName = strtolower($validated['merk'] . ' -' . $validated['model']);
            $modelDirectory = 'cars/' . $directoryName; // Note: Removed 'public/' from the directory path

            // Create directory if it doesn't exist
            if (!Storage::exists($modelDirectory)) {
                Storage::makeDirectory($modelDirectory);
            }

            // Initialize image paths
            $imagePaths = [
                'image_1' => null,
                'image_2' => null,
                'image_3' => null,
                'image_4' => null,
                'image_5' => null,
            ];

            // Handle file uploads for each image input and store paths
            foreach ($imagePaths as $key => &$path) {
                if ($request->hasFile($key)) {
                    $path = $request->file($key)->store($modelDirectory, 'public'); // Store the file in 'public' disk
                    // Remove 'public/' prefix from the stored path
                    $path = str_replace('public/', '', $path);
                }
            }



    
        // Handle file uploads for each image input and store paths
        foreach ($imagePaths as $key => &$path) {
            if ($request->hasFile($key)) {
                $path = $request->file($key)->store($modelDirectory);
            }
        }
    
        // Create a new Car instance and assign all attributes including image paths
        $car = new Car();
        $car->merk = $validated['merk'];
        $car->model = $validated['model'];
        $car->year = $validated['year'];
        $car->color = $validated['color'];
        $car->license_plate = $validated['license_plate'];
        $car->vin = $validated['vin'];
        $car->daily_rate = $validated['daily_rate'];
        $car->status = $validated['status'];
        $car->kilometers = $validated['kilometers'];
        $car->fuel_type = $validated['fuel_type'];
        $car->transmission_type = $validated['transmission_type'];
        $car->hp = $validated['hp'];
        $car->insurance = $validated['insurance'];
        $car->image_1 = $imagePaths['image_1'];
        $car->image_2 = $imagePaths['image_2'];
        $car->image_3 = $imagePaths['image_3'];
        $car->image_4 = $imagePaths['image_4'];
        $car->image_5 = $imagePaths['image_5'];
    
        $car->save();
    
        return redirect()->route('admin.list')->with('success', 'Car added successfully.');
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
