<x-layouts.master>

    <x-slot:title>
        Product Edit
    </x-slot>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">

                        <div class="card-body">
                            <form method="POST" action="{{ route('products.update', $product->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="bg-indigo-50 min-h-screen md:px-20 pt-6">
                                    <div class="bg-white rounded-md px-6 py-10 max-w-2xl mx-auto">
                                        <h1 class="text-center text-2xl font-bold text-gray-500 mb-10">Edit Product</h1>
                                        <div class="space-y-4">
                                            <div>
                                                <label for="title" class="text-lg font-semibold">Title:</label>
                                                <input type="text" name="title" placeholder="Enter title"
                                                    id="title"
                                                    class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md @error('title') border-red-500 @enderror"
                                                    required value="{{ old('title', $product->title) }}" />
                                                @error('title')
                                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="flex items-center mb-6">
                                                <label for="image" class="text-lg font-semibold mr-4">Image:</label>
                                                <div class="relative">
                                                    <img src="https://picsum.photos/id/1/200/300" alt="image"
                                                        class="rounded-lg shadow-md w-56 h-48 object-cover">
                                                    <input type="file" name="image" id="image"
                                                        class="absolute inset-0 opacity-0 w-full h-full cursor-pointer"
                                                        required />
                                                </div>
                                                @error('image')
                                                    <p class="text-red-500 text-sm ml-2">{{ $message }}</p>
                                                @enderror
                                            </div>

                                            <div>
                                                <label for="color" class="text-lg font-semibold">Color:</label>
                                                <input type="text" name="color" placeholder="Enter color"
                                                    id="color"
                                                    class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md @error('color') border-red-500 @enderror"
                                                    required value="{{ old('color', $product->color) }}" />
                                                @error('color')
                                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div>
                                                <label for="size" class="text-lg font-semibold">Size:</label>
                                                <input type="text" name="size" placeholder="Enter size"
                                                    id="size"
                                                    class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md @error('size') border-red-500 @enderror"
                                                    required value="{{ old('size', $product->size) }}" />
                                                @error('size')
                                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div>
                                                <label for="price" class="text-lg font-semibold">Price:</label>
                                                <input type="number" name="price" placeholder="Enter price"
                                                    id="price"
                                                    class="ml-2 outline-none py-1 px-2 text-md border-2 rounded-md @error('price') border-red-500 @enderror"
                                                    required step="0.01"
                                                    value="{{ old('price', $product->price) }}" />
                                                @error('price')
                                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <button type="submit"
                    class="px-6 py-2 mx-auto block rounded-md text-lg font-semibold text-white bg-indigo-600 hover:bg-indigo-700">Update
                    Product</button>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.master>
