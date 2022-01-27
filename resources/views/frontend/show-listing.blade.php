<x-main-layout>
    <x-slot name="header">
        <x-main-header></x-main-header>
    </x-slot>
    <section>
        {{-- <x-main-hero></x-main-hero> --}}
    </section>
    <section>
        <section class="text-gray-600 body-font overflow-hidden">
            <div class="container px-5 py-24 mx-auto mt-10">
              <div class="lg:w-4/5 mx-auto flex flex-wrap">
                <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="{{ Storage::url($listing->featured_image) }}">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                  <h2 class="text-sm title-font text-gray-500 tracking-widest">{{ $listing->category->name }}</h2>
                  <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $listing->title }}</h1>
                  <div class="flex mb-4">
                    <span class="flex items-center">
                        <span class="text-gray-600">Call Now</span>
                        <span class="ml-3 font-bold text-indigo-500">{{ $listing->phone_number }}</span>
                    </span>
                
                  </div>
                  <p class="leading-relaxed">{{ $listing->description }}</p>
                  <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
                    <div class="flex items-center">
                      <span class="mr-3">Location</span>
                      <span class="text-xl">{{ $listing->location }}</span>
                    </div>
                    <div class="flex ml-6 items-center">
                      <span class="mr-3">Type</span>
                      <span class="font-bold">{{ $listing->condition }}</span>
                    </div>
                  </div>
                  <div class="flex">
                    <span class="title-font font-medium text-2xl text-gray-900">Price: ${{ $listing->price }}</span>
                    <a href="{{ route('contact') }}" class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Contact</a>
                    
                  </div>
                </div>
              </div>
            </div>
          </section>
    </section>
    <x-main-footer></x-main-footer>
</x-main-layout>