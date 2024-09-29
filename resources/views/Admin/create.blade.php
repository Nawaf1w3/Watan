
<x-app-layout>

<style>
         .form-container {
            max-width: 90%;
            margin: auto;
            padding: 2%;
            margin-bottom: 2rem; /* Creates space below the form */
            margin-top: 2rem; /* Creates space below the form */
        }
        
</style>
<section class="relative w-full flex  items-center justify-center  bg-cover bg-center" style="min-height:700px; background-image: url('{{ asset('images/background-admin.jpg') }}');">
    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <!-- Banner Content -->
    <div class="relative z-10 flex items-center justify-center w-full h-full">
        <div class="text-center text-white px-4 md:px-8">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Welcome bij Watan auto huur bedrijf</h1>
            <p class="text-lg md:text-xl mb-8">Huur premium auto's, Voor betaalbare prijzen.</p>
            <a href="#" class="bg-yellow-500 text-black py-2 px-6 rounded-lg text-lg font-semibold hover:bg-yellow-600">Meer weten</a>
        </div>
    </div>
</section>
<section class="bg-black flex items-center justify-center min-h-screen py-6">
    <div class="form-container bg-gg p-8 rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold mb-6 text-white text-center">Auto Toevoegen</h2>
         <form action="{{ route('admin.store') }}" method="post" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @csrf
            <div class="flex justify-between">
                <div class="w-full p-1">
                    <label for="year" class="block text-gray-200 font-medium mb-1 text-center">doors</label>
                    <select id="doors" name="doors"  class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="2">2</option>
                        <option value="4">4</option>
                    </select>
                    @error('doors')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full p-1">
                    <label for="passengers" class="block text-gray-200 font-medium mb-1 text-center">passengers</label>

                    <select id="passengers" name="passengers"  class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="2">2</option>
                        <option value="5">5</option>
                        <option value="7">7</option>
                    </select>
                      @error('passengers')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <!-- Brand -->
            <div class="flex justify-between">
                <div class="w-full p-1">
                    <label for="year" class="block text-gray-200 font-medium mb-1 text-center">Merk</label>
                    <input type="text"  id="merk" name="merk"  class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('merk')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                    
                </div>
                <div class="w-full p-1">
                    <label for="model" class="block text-gray-200 font-medium mb-1 text-center">Model</label>

                    <input type="text" id="model"  name="model"  class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                      @error('model')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <!-- Year -->
            <div class="flex justify-between">
                <div class="w-full p-1">
                    <label for="year" class="block text-gray-200 font-medium mb-1 text-center">Jaar</label>
                    <input type="text"  id="year" name="year"  class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                      @error('year')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full p-1">
                    <label for="year" class="block text-gray-200 font-medium mb-1 text-center">Kleur</label>
                    <input type="text" id="color"  name="color"  class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                      @error('kleur')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <!-- License Plate -->
            <div class="flex justify-between">
                <div class="w-full p-1">
                    <label for="license_plate" class="block text-gray-200 font-medium mb-1 text-center">Kenteken</label>
                    <input type="text" id="license_plate" name="license_plate"  class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                      @error('license_plate')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full p-1">
                    <label for="vin" class="block text-gray-200 font-medium mb-1 text-center">VIN</label>
                    <input type="text" id="vin" name="vin" class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                      @error('vin')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="flex justify-between">
                <div class="w-full p-1">
                    <label for="hp" class="block text-gray-200 font-medium mb-1 text-center">PK</label>
                    <input type="text" id="hp" name="hp" class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                      @error('hp')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full p-1">
                    <label for="insurance" class="block text-gray-200 font-medium mb-1 text-center">Borg</label>
                    <input type="text" id="insurance" name="insurance"  class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                      @error('insurance')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            
            <!-- Daily Rate -->
            <div class="flex justify-between">
                <div class="w-full p-1">
                    <label for="daily_rate" class="block text-gray-200 font-medium mb-1 text-center">Dagprijs</label>
                    <input type="number" id="daily_rate" name="daily_rate" step="0.01"  class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                      @error('daily_rate')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full p-1">
                    <label for="status" class="block text-gray-200 font-medium mb-1 text-center">Status</label>
                    <select id="status" name="status"  class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="beschikbaar">Beschikbaar</option>
                        <option value="verhuurd">Verhuurd</option>
                        <option value="onderhoud">Onderhoud</option>
                    </select>
                    @error('status')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <!-- Kilometers -->
            <div class="flex justify-between">
                <div class="w-full p-1">
                    <label for="kilometers" class="block text-gray-200 font-medium mb-1 text-center">Kilometers</label>
                    <input type="number" id="kilometers" name="kilometers"  class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('status')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full p-1">
                    <label for="fuel_type" class="block text-gray-200 font-medium mb-1 text-center">Brandstof Type</label>
                    <select id="fuel_type" name="fuel_type"  class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="Benzine">Benzine</option>
                        <option value="Diesel">Diesel</option>
                        <option value="Elektrisch">Elektrisch</option>
                    </select>
                    @error('fuel_type')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <!-- Transmission Type -->
            <div class="flex justify-center">
                <div class="w-full p-1">
                    <label for="transmission_type" class="block text-gray-200 font-medium mb-1">Versnellingsbak Type</label>
                    <select id="transmission_type" name="transmission_type"  class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="handmatig">Handmatig</option>
                        <option value="automatisch">Automatisch</option>
                    </select>
                    @error('transmission_type')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full p-1">
                    <label for="car_type" class="block text-gray-200 font-medium mb-1">Auto Type</label>
                    <select id="car_type" name="car_type"  class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="taxi">Taxi</option>
                        <option value="private">Private</option>
                    </select>
                    @error('car_type')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <!-- Images -->
            <div class="flex justify-between">
                <div class="w-full p-1">
                    <label for="image_1" class="block text-gray-200 font-medium mb-1">Hoofdfoto</label>
                    <input type="file" id="image_1" name="image_1" accept="image/*" class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                          @error('image_1')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full p-1">
                    <label for="image_2" class="block text-gray-200 font-medium mb-1">meer foto's</label>
                    <input type="file" id="image_2" name="image_2" accept="image/*" class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                          @error('image_2')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full p-1">
                    <label for="image_3" class="block text-gray-200 font-medium mb-1">meer foto's</label>
                    <input type="file" id="image_3" name="image_3" accept="image/*" class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                          @error('image_3')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full p-1">
                    <label for="image_4" class="block text-gray-200 font-medium mb-1">meer foto's</label>
                    <input type="file" id="image_4" name="image_4" accept="image/*" class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                          @error('image_4')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="w-full p-1">
                    <label for="image_5" class="block text-gray-200 font-medium mb-1">meer foto's</label>
                    <input type="file" id="image_5" name="image_5" accept="image/*" class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                          @error('image_5')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <!-- Other Images -->
    
            <!-- Submit Button -->
            <div class="md:col-span-2">
                <button type="submit" class="w-full py-3 bg-blue-600 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Verzenden
                </button>
            </div>
        </form>
    </div>
</section>
</x-app-layout>