<x-layouts.master>

    <x-slot:title>
        Products
    </x-slot>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <!-- component -->
        <section class="bg-white dark:bg-gray-900">
            <div class="container px-6 py-8 mx-auto">
                <div class="lg:flex lg:-mx-2">
                    {{-- sidebar --}}
                    <div class="space-y-3 lg:w-1/5 lg:px-2 lg:space-y-4">
                        <a href="#"
                            class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Jackets
                            & Coats</a>
                        <a href="#"
                            class="block font-medium text-gray-500 dark:text-gray-300 hover:underline">Hoodies</a>
                        <a href="#"
                            class="block font-medium text-blue-600 dark:text-blue-500 hover:underline">T-shirts
                            & Vests</a>
                        <a href="{{ route('products.create') }}">
                            <button
                                class="flex items-center justify-center w-full px-2 py-2 mt-4 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-gray-800 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">

                                <span class="mx-1">Add Product</span>
                            </button>
                        </a>

                    </div>
                    {{-- filter --}}
                    <div class="mt-6 lg:mt-0 lg:px-2 lg:w-4/5 ">
                        <div class="flex items-center justify-between text-sm tracking-widest uppercase ">
                            <p class="text-gray-500 dark:text-gray-300">6 Items</p>
                            <div class="flex items-center">
                                <p class="text-gray-500 dark:text-gray-300">Sort</p>
                                <select
                                    class="font-medium text-gray-700 bg-transparent dark:text-gray-500 focus:outline-none">
                                    <option value="#">Recommended</option>
                                    <option value="#">Size</option>
                                    <option value="#">Price</option>
                                </select>
                            </div>
                        </div>
                        {{-- products section  --}}
                        <div class="grid grid-cols-1 gap-8 mt-8 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                            @foreach ($products as $product)
                                {{-- @dump($product->image) --}}
                                <div class="flex flex-col items-center justify-center">
                                    <a href="{{ route('products.edit', $product->id) }}">
                                        <img class="object-cover w-full rounded-md h-72 xl:h-80"
                                            src="{{ asset('storage/images/' . $product->image) }}"
                                            alt="{{ $product->title }}">
                                        <h4 class="mt-2 text-lg font-medium text-gray-700 dark:text-gray-200">
                                            {{ $product->title }}</h4>
                                        <p class="text-blue-500">${{ $product->price }}</p>
                                    </a>
                                    <button
                                        class="flex items-center justify-center w-full px-2 py-2 mt-4 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-gray-800 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mx-1" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <!-- Add to cart icon -->
                                        </svg>
                                        <span class="mx-1">Add to cart</span>
                                    </button>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layouts.master>
