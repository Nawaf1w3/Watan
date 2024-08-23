<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['merk', 'model', 'year', 'color','license_plate','vin','daily_rate','status','kilometers','fuel_type','transmission_type'];
   
}
