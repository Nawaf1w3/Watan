<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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
            'doors'  =>'required|string|in:2,4',

            'passengers'  =>'required|string|in:2,5,7',

            'car_type'  =>'required|string|in:taxi,private',
            'merk' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'color' => 'required|string|max:255',
            'license_plate' => 'required|string|max:255',
            'vin' => 'nullable|string|max:255',
            'daily_rate' => 'required|numeric|min:0',
            'status' => 'required|string|in:beschikbaar,verhuurd,onderhoud',
            'kilometers' => 'required|integer|min:0',
            'fuel_type' => 'required|string|in:Benzine,Diesel,Elektrisch',
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
            $directoryName = strtolower($validated['merk'] . '-' . $validated['model']);
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
        $car->doors = $validated['doors'];
        $car->passengers = $validated['passengers'];
        $car->car_type = $validated['car_type'];
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
    public function edit($id)
    {
        // Find the car by its ID
        $car = Car::findOrFail($id);
        // dd($car);
        // Pass the car to the edit view
        return view('admin.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate incoming request data
        $validated = $request->validate([
            'car_type'  =>'required|string|in:taxi,private',
            'merk' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'color' => 'required|string|max:255',
            'license_plate' => 'required|string|max:255',
            'vin' => 'nullable|string|max:255',
            'daily_rate' => 'required|numeric|min:0',
            'status' => 'required|string|in:beschikbaar,verhuurd,onderhoud',
            'kilometers' => 'required|integer|min:0',
            'fuel_type' => 'required|string|in:Benzine,Diesel,Elektrisch',
            'transmission_type' => 'required|string|in:handmatig,automatisch',
            'image_1' => 'nullable',
            'image_2' => 'nullable',
            'image_3' => 'nullable',
            'image_4' => 'nullable',
            'image_5' => 'nullable',
            'hp' => 'nullable|integer|min:0',
            'insurance' => 'nullable|string|max:255',
        ]);
        // dd('dd');
        // Find the car instance by ID
        $car = Car::findOrFail($id);
    
        // Generate directory name based on merk and model
        $directoryName = strtolower($validated['merk'] . '-' . $validated['model']);
        $modelDirectory = 'cars/' . $directoryName;
    
        // Create directory if it doesn't exist
        if (!Storage::exists($modelDirectory)) {
            Storage::makeDirectory($modelDirectory);
        }
    
        // Handle file uploads and paths
        $imageFields = ['image_1', 'image_2', 'image_3', 'image_4', 'image_5'];
        foreach ($imageFields as $imageField) {
            if ($request->hasFile($imageField)) {
                // Delete old image if exists
                if ($car->$imageField) {
                    Storage::delete('public/' . $car->$imageField);
                }
    
                // Store new image and update path
                $path = $request->file($imageField)->store($modelDirectory, 'public');
                $car->$imageField = str_replace('public/', '', $path); // Remove 'public/' prefix
            }
        }
    
        // Update other car attributes
        $car->car_type = $validated['car_type'];
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
    
        // Save the updated car record
        $car->save();
    
        // Redirect back with a success message
        return redirect()->route('admin.list')->with('success', 'Car updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $car = Car::findOrFail($id);
    
        // Construct the directory path
        $directory = 'cars/' . $car->merk . '-' . $car->model;
        
        // Delete the entire directory with all its contents
        Storage::disk('public')->deleteDirectory($directory);
    
        // Delete the car record from the database
        $car->delete();
    
        return redirect()->route('admin.list')->with('success', 'Car and associated images deleted successfully');
    }
}
