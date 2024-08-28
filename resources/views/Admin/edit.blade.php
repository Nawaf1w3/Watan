<x-app-layout>

    <style>
        .form-container {
            max-width: 90%;
            margin: auto;
            padding: 2%;
            margin-bottom: 2rem;
            margin-top: 2rem;
        }
    </style>
    
    <section class="relative w-full flex items-center justify-center bg-cover bg-center" style="min-height:700px; background-image: url('{{ asset('images/background-admin.jpg') }}');">
        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <!-- Banner Content -->
        <div class="relative z-10 flex items-center justify-center w-full h-full">
            <div class="text-center text-white px-4 md:px-8">
                <h1 class="text-4xl md:text-6xl font-bold mb-4">Welkom bij Watan auto huur bedrijf</h1>
                <p class="text-lg md:text-xl mb-8">Huur premium auto's, voor betaalbare prijzen.</p>
                <a href="#" class="bg-yellow-500 text-black py-2 px-6 rounded-lg text-lg font-semibold hover:bg-yellow-600">Meer weten</a>
            </div>
        </div>
    </section>
    
    <section class="bg-black flex items-center justify-center min-h-screen py-6">
        <div class="form-container bg-gg p-8 rounded-lg shadow-lg">
            <h2 class="text-3xl font-bold mb-6 text-white text-center">Auto Bewerken</h2>
            
            <!-- Update Form -->
            <form action="{{ route('admin.update', ['id' => $car->id]) }}" method="post" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @csrf
                @method('PUT') <!-- This is important for the update method -->
                <!-- Brand -->
                <div class="flex justify-between">
                    <div class="w-full p-1">
                        <label for="merk" class="block text-gray-200 font-medium mb-1 text-center">Merk</label>
                        <input type="text" id="merk" name="merk" value="{{ old('merk', $car->merk) }}" class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('merk')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="w-full p-1">
                        <label for="model" class="block text-gray-200 font-medium mb-1 text-center">Model</label>
                        <input type="text" id="model" name="model" value="{{ old('model', $car->model) }}" class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('model')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- Year and Color -->
                <div class="flex justify-between">
                    <div class="w-full p-1">
                        <label for="year" class="block text-gray-200 font-medium mb-1 text-center">Jaar</label>
                        <input type="text" id="year" name="year" value="{{ old('year', $car->year) }}" class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('year')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="w-full p-1">
                        <label for="color" class="block text-gray-200 font-medium mb-1 text-center">Kleur</label>
                        <input type="text" id="color" name="color" value="{{ old('color', $car->color) }}" class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('color')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex w-full justify-between">
                    <div class="w-full p-1">
                        <label for="transmission_type" class="block text-gray-200 font-medium mb-1 text-center">Versnellingsbak Type</label>
                        <select id="transmission_type" name="transmission_type" class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="handmatig" {{ $car->transmission_type == 'handmatig' ? 'selected' : '' }}>Handmatig</option>
                            <option value="automatisch" {{ $car->transmission_type == 'automatisch' ? 'selected' : '' }}>Automatisch</option>
                        </select>
                        @error('transmission_type')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="w-full p-1">
                        <label for="car_type" class="block text-gray-200 font-medium mb-1 text-center">Auto type</label>
                        <select id="car_type" name="car_type" class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="taxi" {{ old('car_type', $car->car_type) == 'taxi' ? 'selected' : '' }}>Taxi</option>
                            <option value="private" {{ old('car_type', $car->car_type) == 'private' ? 'selected' : '' }}>Private</option>
                        </select>
                        
                        @error('car_type')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- License Plate and VIN -->
                <div class="flex justify-between">
                    <div class="w-full p-1">
                        <label for="license_plate" class="block text-gray-200 font-medium mb-1 text-center">Kenteken</label>
                        <input type="text" id="license_plate" name="license_plate" value="{{ old('license_plate', $car->license_plate) }}" class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('license_plate')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="w-full p-1">
                        <label for="vin" class="block text-gray-200 font-medium mb-1 text-center">VIN</label>
                        <input type="text" id="vin" name="vin" value="{{ old('vin', $car->vin) }}" class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('vin')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- Horsepower and Insurance -->
                <div class="flex justify-between">
                    <div class="w-full p-1">
                        <label for="hp" class="block text-gray-200 font-medium mb-1 text-center">PK</label>
                        <input type="text" id="hp" name="hp" value="{{ old('hp', $car->hp) }}" class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('hp')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="w-full p-1">
                        <label for="insurance" class="block text-gray-200 font-medium mb-1 text-center">Borg</label>
                        <input type="text" id="insurance" name="insurance" value="{{ old('insurance', $car->insurance) }}" class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('insurance')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- Daily Rate and Status -->
                <div class="flex justify-between">
                    <div class="w-full p-1">
                        <label for="daily_rate" class="block text-gray-200 font-medium mb-1 text-center">Dagprijs</label>
                        <input type="number" id="daily_rate" name="daily_rate" step="0.01" value="{{ old('daily_rate', $car->daily_rate) }}" class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('daily_rate')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="w-full p-1">
                        <label for="status" class="block text-gray-200 font-medium mb-1 text-center">Status</label>
                        <select id="status" name="status" class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="beschikbaar" {{ old('status', $car->status) == 'beschikbaar' ? 'selected' : '' }}>Beschikbaar</option>
                            <option value="verhuurd" {{ old('status', $car->status) == 'verhuurd' ? 'selected' : '' }}>Verhuurd</option>
                            <option value="onderhoud" {{ old('status', $car->status) == 'onderhoud' ? 'selected' : '' }}>Onderhoud</option>
                        </select>
                        @error('status')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- Kilometers and Fuel Type -->
                <div class="flex justify-between">
                    <div class="w-full p-1">
                        <label for="kilometers" class="block text-gray-200 font-medium mb-1 text-center">Kilometers</label>
                        <input type="number" id="kilometers" name="kilometers" value="{{ old('kilometers', $car->kilometers) }}" class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('kilometers')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex justify-between">
                    <div class="w-full p-1">
                        <label for="fuel_type" class="block text-gray-200 font-medium mb-1 text-center">Brandstof</label>
                        <select id="fuel_type" name="fuel_type" class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="Benzine" {{ old('fuel_type', $car->fuel_type) == 'benzine' ? 'selected' : '' }}>Benzine</option>
                            <option value="Diesel" {{ old('fuel_type', $car->fuel_type) == 'diesel' ? 'selected' : '' }}>Diesel</option>
                            <option value="Elektrisch" {{ old('fuel_type', $car->fuel_type) == 'elektrisch' ? 'selected' : '' }}>Elektrisch</option>
                        </select>
                        @error('fuel_type')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
     
                <!-- Image Uploads -->
                <div class="flex justify-between">
                    <!-- Existing Image Preview -->
                    <div class="w-full p-1">
                        <label for="current_image1" class="block text-gray-200 font-medium mb-1 text-center">Huidige Afbeelding 1</label>
                        <img src="{{ asset('storage/' . $car->image_1) }}" alt="Huidige Afbeelding 1" class="w-full h-48 object-cover rounded-lg mb-2">
                        <label for="image1" class="block text-gray-200 font-medium mb-1 text-center">Nieuwe Afbeelding 1</label>
                        <input type="file" id="image_1" name="image_1" class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('image_1')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Existing Image Preview -->
                    <div class="w-full p-1">
                        <label for="current_image2" class="block text-gray-200 font-medium mb-1 text-center">Huidige Afbeelding 2</label>
                        <img src="{{ asset('storage/' . $car->image_2) }}" alt="Huidige Afbeelding 2" class="w-full h-48 object-cover rounded-lg mb-2">
                        <label for="image2" class="block text-gray-200 font-medium mb-1 text-center">Nieuwe Afbeelding 2</label>
                        <input type="file" id="image_2" name="image_2" class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('image_2')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="flex justify-between">
                    <!-- Additional Image Upload -->
                    <div class="w-full p-1">
                        <label for="current_image3" class="block text-gray-200 font-medium mb-1 text-center">Huidige Afbeelding 3</label>
                        <img src="{{ asset('storage/' . $car->image_3) }}" alt="Huidige Afbeelding 3" class="w-full h-48 object-cover rounded-lg mb-2">
                        <label for="image3" class="block text-gray-200 font-medium mb-1 text-center">Nieuwe Afbeelding 3</label>
                        <input type="file" id="image_3" name="image_3" class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('image_3')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="w-full p-1">
                        <label for="current_image3" class="block text-gray-200 font-medium mb-1 text-center">Huidige Afbeelding 3</label>
                        <img src="{{ asset('storage/' . $car->image_4) }}" alt="Huidige Afbeelding 3" class="w-full h-48 object-cover rounded-lg mb-2">
                        <label for="image3" class="block text-gray-200 font-medium mb-1 text-center">Nieuwe Afbeelding 3</label>
                        <input type="file" id="image_4" name="image_4" class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('image_4')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="w-full p-1">
                        <label for="current_image3" class="block text-gray-200 font-medium mb-1 text-center">Huidige Afbeelding 3</label>
                        <img src="{{ asset('storage/' . $car->image_5) }}" alt="Huidige Afbeelding 3" class="w-full h-48 object-cover rounded-lg mb-2">
                        <label for="image3" class="block text-gray-200 font-medium mb-1 text-center">Nieuwe Afbeelding 3</label>
                        <input type="file" id="image_5" name="image_5" class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('image_5')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
 
                <!-- Submit Button -->
                <div class="col-span-2 text-center">
                    <button type="submit" class="bg-yellow-500 text-black py-2 px-6 rounded-lg text-lg font-semibold hover:bg-yellow-600">Bijwerken</button>
                </div>
            </form>
        </div>
    </section>
</x-app-layout>
    