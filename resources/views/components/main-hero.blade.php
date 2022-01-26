{{-- <div class="w-full bg-center bg-cover h-[32rem]" style="background-image: url(https://images.unsplash.com/photo-1606857521015-7f9fcf423740?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80);"> --}}
<div class="w-full bg-center bg-cover h-[50rem]"
    style="background-image: linear-gradient(90deg, rgba(202,176,255,1) 0%, rgba(162,123,249,1) 51%, rgba(123,125,249,1) 100%);">
    <div class="flex items-center justify-center w-full h-full bg-gray-900 bg-opacity-10">
        <div class="text-center" id="form-filter">
            {{-- Search Box --}}
            <div class="flex items-center justify-center w-full h-full">
                <div class="text-center">
                    <div class="border border-gray-300 p-6 grid grid-cols-1 gap-6 bg-white shadow-lg rounded-lg">
                        <form>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="grid grid-cols-2 gap-2 border border-gray-200 p-2 rounded">
                                    <div class="flex border rounded bg-gray-300 items-center p-2 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-700 mr-2 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                          </svg>
                                        <input type="text" placeholder="Filter by Title..." name="title" id="title"
                                            class="bg-gray-300 max-w-full focus:outline-none text-gray-700" />
                                    </div>
                                    <div class="flex border rounded bg-gray-300 items-center p-2 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-700 mr-2 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                          </svg>
                                        <select class="bg-gray-300 w-full focus:outline-none text-gray-700"
                                            id="category">
                                            <option selected value="">Categories</option>

                                            @foreach (App\Models\Category::all() as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 gap-2 border border-gray-200 p-2 rounded">
                                    <div class="flex border rounded bg-gray-300 items-center p-2 ">                                
                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-700 mr-2 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                          </svg>
                                        <select class="bg-gray-300 w-full focus:outline-none text-gray-700"
                                            id="country">
                                            <option selected value="">Countries</option>
                                            @foreach (App\Models\Country::all() as $country)
                                            <option value="{{ $country->id }}">{{ $country->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="flex border rounded bg-gray-300 items-center p-2 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-700 mr-2 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                          </svg>
                                        <input type="text" id="maxPrice" name="maxPrice" placeholder="Filter by Max Price..."
                                            class="bg-gray-300 max-w-full focus:outline-none text-gray-700" />
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center mt-3">
                                <button type="button" id="filter"
                                    class="p-2 border w-2/4 rounded-md bg-indigo-500 text-white font-bold">Filter Ads</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>