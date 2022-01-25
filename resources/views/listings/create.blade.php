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
                            
                                @livewire('depended-country')

                                @livewire('image-preview')
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
