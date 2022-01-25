<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Create Listing') }}
            </h2>
            <a href="{{ route('listings.index') }}" class="text-white px-4 py-2 bg-indigo-500 rounded">Back</a>
        </div>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                {{-- Form --}}
                <div class="container px-5 py-24 mx-auto">
                    <div class="lg:w-1/2 md:w-2/3 mx-auto">
                        <form action="{{ route('listings.store') }}" class="w-full" enctype="multipart/form-data"
                            method="POST">
                            @csrf
                            <div class="flex flex-wrap -m-2">
                                <div class="p-2 w-full">
                                    <div class="relative">
                                        <label for="title" class="leading-7 text-sm text-gray-600">Title</label>
                                        <input type="text" id="title" name="title"
                                            class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                            placeholder="Add title...">
                                        @error('title')
                                        <div>
                                            <span class="text-red-400">{{ $message }}</span>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="p-2 w-full">
                                    <div class="relative">
                                        <label for="description" class="leading-7 text-sm text-gray-600">Description</label>                                
                                        <textarea name="description" id="description" cols="30" rows="3" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                        placeholder="Add description..."></textarea>
                                        @error('description')
                                        <div>
                                            <span class="text-red-400">{{ $message }}</span>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="p-2 w-1/2">
                                    <div class="relative">
                                        <label for="price" class="leading-7 text-sm text-gray-600">Price</label>
                                        <input type="text" id="price" name="price"
                                            class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                            placeholder="Add price...">
                                        @error('price')
                                        <div>
                                            <span class="text-red-400">{{ $message }}</span>
                                        </div>
                                        @enderror
                                    </div>
                                </div>                            
                                <div class="p-2 w-1/2">
                                    <div class="relative">
                                        <label for="price_negotiable" class="leading-7 text-sm text-gray-600">Price Negotiable</label>
                                        <select name="price_negotiable" id="price_negotiable" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            <option value="">Select price negotiable</option>                                            
                                            <option value="fixed">Fixed</option>                                            
                                            <option value="negotiable">Negotiable</option>                                            
                                        </select>                            
                                        @error('price_negotiable')
                                        <div>
                                            <span class="text-red-400">{{ $message }}</span>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="p-2 w-1/2">
                                    <div class="relative">
                                        <label for="condition" class="leading-7 text-sm text-gray-600">Condition</label>
                                        <select name="condition" id="condition" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            <option value="">Select add condition</option>                                            
                                            <option value="new">New</option>                                            
                                            <option value="used">Used</option>                                            
                                        </select>                            
                                        @error('condition')
                                        <div>
                                            <span class="text-red-400">{{ $message }}</span>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="p-2 w-1/2">
                                    <div class="relative">
                                        <label for="location" class="leading-7 text-sm text-gray-600">Location</label>
                                        <input type="text" id="location" name="location"
                                            class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                            placeholder="Add location...">
                                        @error('location')
                                        <div>
                                            <span class="text-red-400">{{ $message }}</span>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="p-2 w-1/2">
                                    <div class="relative">
                                        <label for="phone_number" class="leading-7 text-sm text-gray-600">Phone Number</label>
                                        <input type="text" id="phone_number" name="phone_number"
                                            class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                            placeholder="Add phone number...">
                                        @error('phone_number')
                                        <div>
                                            <span class="text-red-400">{{ $message }}</span>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="p-2 w-1/2">
                                    <div class="relative">
                                        <label for="is_published" class="leading-7 text-sm text-gray-600">Published</label>
                                        <select name="is_published" id="is_published" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            <option value="">Select add is published</option>                                            
                                            <option value="0">Unpublished</option>                                            
                                            <option value="1">Published</option>                                            
                                        </select>                            
                                        @error('is_published')
                                        <div>
                                            <span class="text-red-400">{{ $message }}</span>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>                  
                            
                                @livewire('depended-category')
                            
                            <div class="flex flex-wrap -m-2">
                                <div class="p-2 w-full">
                                    <div class="relative">
                                        <label for="country_id" class="leading-7 text-sm text-gray-600">Country</label>
                                        <select name="country_id" id="country_id" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            <option value="">Select a country</option>
                                            @foreach (App\Models\Country::all() as $country)
                                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                            @endforeach
                                        </select>                            
                                        @error('country_id')
                                        <div>
                                            <span class="text-red-400">{{ $message }}</span>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="p-2 w-1/2">
                                    <div class="relative">
                                        <label for="state_id" class="leading-7 text-sm text-gray-600">State</label>
                                        <select name="state_id" id="state_id" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            <option value="">Select a state</option>
                                            @foreach (App\Models\State::all() as $state)
                                                <option value="{{ $state->id }}">{{ $state->name }}</option>
                                            @endforeach
                                        </select>                            
                                        @error('state_id')
                                        <div>
                                            <span class="text-red-400">{{ $message }}</span>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="p-2 w-1/2">
                                    <div class="relative">
                                        <label for="city_id" class="leading-7 text-sm text-gray-600">City</label>
                                        <select name="city_id" id="city_id" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                            <option value="">Select a city</option>
                                            @foreach (App\Models\City::all() as $city)
                                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                            @endforeach
                                        </select>                            
                                        @error('city_id')
                                        <div>
                                            <span class="text-red-400">{{ $message }}</span>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap -m-2">
                                <div class="p-2 w-full">
                                    <div class="relative">
                                        <label for="featured_image" class="leading-7 text-sm text-gray-600">Featured Image</label>
                                        <input type="file" id="featured_image" name="featured_image"
                                            class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        @error('featured_image')
                                        <div>
                                            <span class="text-red-400">{{ $message }}</span>
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="p-2 w-1/2">
                                    <div class="relative">
                                        <label for="image_one" class="leading-7 text-sm text-gray-600">Image One</label>
                                        <input type="file" id="image_one" name="image_one"
                                            class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        @error('image_one')
                                        <div>
                                            <span class="text-red-400">{{ $message }}</span>
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="p-2 w-1/2">
                                    <div class="relative">
                                        <label for="image_two" class="leading-7 text-sm text-gray-600">Image Two</label>
                                        <input type="file" id="image_two" name="image_two"
                                            class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        @error('image_two')
                                        <div>
                                            <span class="text-red-400">{{ $message }}</span>
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="p-2 w-1/2">
                                    <div class="relative">
                                        <label for="image_three" class="leading-7 text-sm text-gray-600">Image Three</label>
                                        <input type="file" id="image_three" name="image_three"
                                            class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        @error('image_three')
                                        <div>
                                            <span class="text-red-400">{{ $message }}</span>
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-wrap -m-2">
                                <div class="p-2 w-full">
                                    <button type="submit"
                                        class="w-full flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Create
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
</x-app-layout>
