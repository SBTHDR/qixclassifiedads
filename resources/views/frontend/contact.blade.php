<x-main-layout>
    <x-slot name="header">
        <x-main-header></x-main-header>
    </x-slot>
    
    <section class="m-2 p-2" id="list-listings">
        <section class="text-gray-600 body-font relative">
            <div class="container px-5 py-24 mx-auto mt-20">
              <div class="flex flex-col text-center w-full mb-12">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Us</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">We implement chat feature between Sellers & Buyers. Send Us A Message.</p>
              </div>
              <div class="lg:w-1/2 md:w-2/3 mx-auto">
                <form action="{{ route('listing-inquiry') }}" method="POST" class="flex flex-wrap -m-2">
                  @csrf
                  <div class="p-2 w-1/2">
                    <div class="relative">
                      <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                      <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">

                      @error('name')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                      @enderror
                    </div>
                  </div>
                  <div class="p-2 w-1/2">
                    <div class="relative">
                      <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                      <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">

                      @error('email')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                      @enderror
                    </div>
                  </div>
                  <div class="p-2 w-full">
                    <div class="relative">
                      <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                      <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                      @error('message')
                            <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                      @enderror
                    </div>
                  </div>
                  <div class="p-2 w-full">
                    <button type="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Submit</button>
                  </div>
                  <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
                    <p class="leading-normal mt-5">722 Red Maple Drive.
                      <br>Mira Loma, CA, California.
                    </p>
                    <a class="text-indigo-500">qixclassifiedads@info.com</a>
                  </div>
                </form>
              </div>
            </div>
        </section>
    </section>
    <x-main-footer></x-main-footer>
</x-main-layout>