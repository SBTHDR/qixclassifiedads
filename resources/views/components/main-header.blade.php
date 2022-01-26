<header class="text-gray-600 body-font bg-white fixed w-full">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
      <a href="/" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0 cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
          </svg>
        <a href="/"><span class="ml-3 text-xl">QixClassifiedAdd</span></a> 
      </a>
      <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
        <a class="mr-5 hover:text-gray-900 cursor-pointer" href="{{ route('all-listings') }}">All Listings</a>
        <a class="mr-5 hover:text-gray-900 cursor-pointer">Pricing</a>
        <a class="mr-5 hover:text-gray-900 cursor-pointer">About</a>
        <a class="mr-5 hover:text-gray-900 cursor-pointer">Contact</a>
        @guest
        <a href="{{ route('login') }}" class="mr-5 hover:text-gray-900 cursor-pointer">Login</a>
        <a href="{{ route('register') }}" class="mr-5 hover:text-gray-900 cursor-pointer">register</a>
        @endguest
        @auth
        <a href="{{ route('dashboard') }}" class="mr-5 hover:text-indigo-900 cursor-pointer text-indigo-500 font-bold">{{ Auth::user()->name }}</a>
        @endauth
      </nav>
      <a href="{{ route('listings.create') }}" class="inline-flex items-center text-white bg-indigo-500 border-0 py-1 px-3 focus:outline-none hover:bg-indigo-700 rounded text-base mt-4 md:mt-0">Add Listing
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
          <path d="M5 12h14M12 5l7 7-7 7"></path>
        </svg>
      </a>
    </div>
  </header>