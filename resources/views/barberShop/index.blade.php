<x-app-layout>
    <div class="max-w-6xl mx-auto mt-10">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-white">Barbershops</h1>
            <a href="{{route('barberShop.create')}}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                Create New Barbershop
            </a>
        </div>
    
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2 border">#</th>
                        <th class="px-4 py-2 border">Name</th>
                        <th class="px-4 py-2 border">Address</th>
                        <th class="px-4 py-2 border">Phone</th>
                        <th class="px-4 py-2 border">Type</th>
                        <th class="px-4 py-2 border">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barberShops as $barberShop)
                        <tr class="hover:bg-gray-100">
                            <td class="px-4 py-2 border text-center"></td>
                            <td class="px-4 py-2 border">{{$barberShop->name}}</td>
                            <td class="px-4 py-2 border">{{$barberShop->address}}</td>
                            <td class="px-4 py-2 border">{{$barberShop->phone}}</td>
                            <td class="px-4 py-2 border">{{$barberShop->type}}</td>
                            <td class="px-4 py-2 border text-center">
                                <a href="" class="text-blue-500 hover:underline">Edit</a>
                                <form action="" method="POST" class="inline">
                                    <button type="submit" class="text-red-500 hover:underline ml-2" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    
    
                    @if ($barberShops->isEmpty())
                        <tr>
                            <td colspan="6" class="px-4 py-2 text-center text-gray-500">No barbershops found.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>