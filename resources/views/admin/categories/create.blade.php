<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Create Category') }}
            </h2>
            <a href="{{ route('categories.index') }}" class="text-white px-4 py-2 bg-indigo-500 rounded">Back</a>
        </div>
    </x-slot>

    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                    {{-- Form --}}
                    <div class="container px-5 py-24 mx-auto">
                      <div class="lg:w-1/2 md:w-2/3 mx-auto">
                        <form action="{{ route('categories.store') }}" class="w-full" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="flex flex-wrap -m-2">                
                                <div class="p-2 w-1/2">
                                    <div class="relative">
                                      <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                                      <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Category name...">
                                    </div>
                                  </div>
                                  <div class="p-2 w-1/2">
                                    <div class="relative">
                                      <label for="image" class="leading-7 text-sm text-gray-600">Image</label>
                                      <input type="file" id="image" name="image" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    </div>
                                  </div>
                                  {{-- <div class="p-2 w-full">
                                    <div class="relative">
                                      <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                                      <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                                    </div>
                                  </div> --}}
                                  <div class="p-2 w-full">
                                    <button type="submit" class="w-full flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Create</button>
                                  </div>
                                </div>
                            </div>
                        </form>
                      </div>
                    </div>
                  
            </div>
        </div>
    </div>
</x-app-layout>