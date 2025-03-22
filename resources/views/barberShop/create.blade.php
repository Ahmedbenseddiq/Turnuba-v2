<x-app-layout>

    <div class="max-w-4xl mx-auto mt-10 bg-white shadow-lg rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-4">Create New Barbershop</h1>

        @if ($message = Session::get('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                <p>{{ $message }}</p>
            </div>
        @elseif ($message = Session::get('error'))
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
                <p>{{ $message }}</p>
            </div>
        @endif
        <form action="{{ route('barberShop.store') }}" method="POST" class="space-y-4">

            @csrf
            <div>
                <label for="name" class="block text-gray-700 font-semibold">Name</label>
                <input type="text" name="name" id="name" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="">
                @error('name')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="address" class="block text-gray-700 font-semibold">Address</label>
                <input type="text" name="address" id="address" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('adresse')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="phone" class="block text-gray-700 font-semibold">Phone</label>
                <input type="text" name="phone" id="phone" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                    value="">
                @error('phone')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="type" class="block text-gray-700 font-semibold">Type</label>
                <select name="type" id="type" 
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="" disabled selected>Select type</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="mixte">Mixte</option>
                </select>
                @error('type')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <a href="{{route('barberShop.index')}}" class="text-gray-600 hover:text-gray-900">Cancel</a>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                    Create Barbershop
                </button>
            </div>
        </form>
    </div>


</x-app-layout>
