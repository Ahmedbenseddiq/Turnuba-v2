<x-app-layout>

<div class="max-w-4xl mx-auto mt-10 bg-white shadow-lg rounded-lg p-6">
    <h1 class="text-2xl font-bold mb-4">Create New Barbershop</h1>

    <form action="" method="POST" class="space-y-4">
        

        <div>
            <label for="name" class="block text-gray-700 font-semibold">Name</label>
            <input type="text" name="name" id="name" required
                   class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                   value="">
        </div>

        <div>
            <label for="address" class="block text-gray-700 font-semibold">Address</label>
            <input type="text" name="address" id="address" required
                   class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                  >
           
        </div>

        <div>
            <label for="phone" class="block text-gray-700 font-semibold">Phone</label>
            <input type="text" name="phone" id="phone" required
                   class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                   value="">
           
        </div>

        <div>
            <label for="type" class="block text-gray-700 font-semibold">Type</label>
            <select name="type" id="type" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="" disabled selected>Select type</option>
                <option value="men">Luxury</option>
                <option value="women">Standard</option>
                <option value="both">Budget</option>
            </select>
           
        </div>

        <div class="flex items-center justify-between">
            <a href="" class="text-gray-600 hover:text-gray-900">Cancel</a>
            <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                Create Barbershop
            </button>
        </div>
    </form>
</div>


</x-app-layout>
