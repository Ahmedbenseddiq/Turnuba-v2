<x-app-layout>
    <div class="max-w-6xl mx-auto mt-10">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="px-4 py-2 bg-gray-200">
                <h1 class="text-2xl font-bold text-white">Barbershop Details</h1>
            </div>
            <div class="p-4">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-bold text-gray-800">{{$barberShop->name}}</h2>
                    <a href="{{route('barberShop.index')}}" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                        Back to List
                    </a>
                </div>
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/2">
                        <p class="text-gray-700 mb-2"><span class="font-semibold">Address:</span> {{$barberShop->address}}</p>
                        <p class="text-gray-700 mb-2"><span class="font-semibold">Phone:</span> {{$barberShop->phone}}</p>
                        <p class="text-gray-700 mb-2"><span class="font-semibold">Type:</span> {{$barberShop->type}}</p>
                    </div>
                    <div class="md:w-1/2">
                        <p class="text-gray-700 mb-2"><span class="font-semibold">Created At:</span> {{$barberShop->created_at->format('d M Y')}}</p>
                        <p class="text-gray-700 mb-2"><span class="font-semibold">Updated At:</span> {{$barberShop->updated_at->format('d M Y')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
