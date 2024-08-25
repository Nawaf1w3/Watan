<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = 
    [ 'merk', 'model', 'year', 'color', 'license_plate', 'vin', 'daily_rate','status', 'kilometers', 'fuel_type', 'transmission_type', 'images','hp','insurance'];

    
    public function getImagesAttribute($value)
    {
        // Decode JSON and handle potential HTML entities
        $decodedValue = json_decode($value, true);
        
        // Ensure it’s an array, fallback to empty array if decoding fails
        return is_array($decodedValue) ? $decodedValue : [];
    }
}
