
<x-app-layout>

<style>
         .form-container {
            max-width: 60%;
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
        <form action="/submit" method="post" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Brand -->
            <div class="flex justify-between">
                <div class="w-full p-1">
                    <label for="year" class="block text-gray-200 font-medium mb-1 text-center">Merk</label>
                    <input type="text"  id="merk" name="merk" required class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="w-full p-1">
                    <label for="year" class="block text-gray-200 font-medium mb-1 text-center">Model</label>

                    <input type="text" id="model"  name="model" required class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
            </div>
            <!-- Year -->
            <div class="flex justify-between">
                <div class="w-full p-1">
                    <label for="year" class="block text-gray-200 font-medium mb-1 text-center">Jaar</label>
                    <input type="text"  id="year" name="year" required class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="w-full p-1">
                    <label for="year" class="block text-gray-200 font-medium mb-1 text-center">Kleur</label>
                    <input type="text" id="kleur"  name="kleur" required class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
            </div>
            <!-- License Plate -->
            <div class="flex justify-between">
                <div class="w-full p-1">
                    <label for="license_plate" class="block text-gray-200 font-medium mb-1 text-center">Kenteken</label>
                    <input type="text" id="license_plate" name="license_plate" required class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="w-full p-1">
                    <label for="vin" class="block text-gray-200 font-medium mb-1 text-center">VIN</label>
                    <input type="text" id="vin" name="vin" class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
            </div>
            <!-- Daily Rate -->
            <div class="flex justify-between">
                <div class="w-full p-1">
                    <label for="daily_rate" class="block text-gray-200 font-medium mb-1 text-center">Dagprijs</label>
                    <input type="number" id="daily_rate" name="daily_rate" step="0.01" required class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="w-full p-1">
                    <label for="status" class="block text-gray-200 font-medium mb-1 text-center">Status</label>
                    <select id="status" name="status" required class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="beschikbaar">Beschikbaar</option>
                        <option value="verhuurd">Verhuurd</option>
                        <option value="onderhoud">Onderhoud</option>
                    </select>
                </div>
            </div>
            <!-- Kilometers -->
            <div class="flex justify-between">
                <div class="w-full p-1">
                    <label for="kilometers" class="block text-gray-200 font-medium mb-1 text-center">Kilometers</label>
                    <input type="number" id="kilometers" name="kilometers" required class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="w-full p-1">
                    <label for="fuel_type" class="block text-gray-200 font-medium mb-1 text-center">Brandstof Type</label>
                    <select id="fuel_type" name="fuel_type" required class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="petrol">Benzine</option>
                        <option value="diesel">Diesel</option>
                        <option value="electric">Elektrisch</option>
                    </select>
                </div>
            </div>
            <!-- Transmission Type -->
            <div>
                <label for="transmission_type" class="block text-gray-200 font-medium mb-1">Versnellingsbak Type</label>
                <select id="transmission_type" name="transmission_type" required class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="handmatig">Handmatig</option>
                    <option value="automatisch">Automatisch</option>
                </select>
            </div>
            <!-- Images -->
            <div class="md:col-span-2">
                <label class="block text-gray-200 font-medium mb-1">Afbeeldingen</label>
                <input type="file" name="images[]" accept="image/*" multiple class="w-full p-2 border bg-gg text-white border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <small class="text-gray-400">Selecteer meerdere afbeeldingen (max 4)</small>
            </div>
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