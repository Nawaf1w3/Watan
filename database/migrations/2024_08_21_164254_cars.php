<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('merk'); // The manufacturer of the car
            $table->string('model'); // The specific model of the car
            $table->integer('year'); // The manufacturing year of the car
            $table->string('color'); // The color of the car
            $table->string('license_plate'); // The car's license plate number
            $table->string('vin')->nullable(); // The Vehicle Identification Number
            $table->decimal('daily_rate', 5, 2); // The rental rate per day in dollars
            $table->enum('status', ['beschikbaar', 'verhuurd', 'onderhoud']);// The status of the car
            $table->integer('kilometers'); // The current mileage of the car
            $table->enum('fuel_type', ['petrol', 'diesel', 'electric']); // Type of fuel
            $table->enum('transmission_type', ['handmatig', 'automatisch']); // Transmission type
            $table->string('hp');
            $table->string('insurance');
            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();
            $table->string('image_4')->nullable();
            $table->string('image_5')->nullable();
            $table->timestamps(); // Created at and updated at timestamps
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Cars');
    }
};
