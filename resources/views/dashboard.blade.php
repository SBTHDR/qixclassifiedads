<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                {{-- <x-jet-welcome /> --}}
                <x-slot name="header">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Dashboard') }}
                    </h2>
                </x-slot>

                <div class="container mx-auto">
                    <section class="text-gray-600 body-font">
                        <div class="container px-5 py-24 mx-auto">
                            <div class="flex flex-col text-center w-full mb-20">
                                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">QixClassifiedAds Classified Ads</h1>
                                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">You can create unlimited custom fields and set them category wise or can create group and fields under then group. Right now support this 7 types of fields Text Box, Text Area, URL, Number, Select, Radio and Checkbox. Users can post different types of ads so their ads view are the different type like Buy, Sell, Exchange, Jobs & To-Let. you can control the ads type from admin end.</p>
                            </div>
                            <div class="flex items-center">
                                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                                    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg text-center">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block"
                                            viewBox="0 0 24 24">
                                            <path d="M8 17l4 4 4-4m-4-5v9"></path>
                                            <path d="M20.88 18.09A5 5 0 0018 9h-1.26A8 8 0 103 16.29"></path>
                                        </svg>
                                        <h2 class="title-font font-medium text-3xl text-gray-900">{{ $listings->count() }}</h2>
                                        <p class="leading-relaxed">Listings</p>
                                    </div>
                                </div>
                                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                                    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg text-center">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block"
                                            viewBox="0 0 24 24">
                                            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                                            <circle cx="9" cy="7" r="4"></circle>
                                            <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
                                        </svg>
                                        <h2 class="title-font font-medium text-3xl text-gray-900">{{ $users->count() }}</h2>
                                        <p class="leading-relaxed">Users</p>
                                    </div>
                                </div>
                                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                                    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg text-center">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block"
                                            viewBox="0 0 24 24">
                                            <path d="M3 18v-6a9 9 0 0118 0v6"></path>
                                            <path
                                                d="M21 19a2 2 0 01-2 2h-1a2 2 0 01-2-2v-3a2 2 0 012-2h3zM3 19a2 2 0 002 2h1a2 2 0 002-2v-3a2 2 0 00-2-2H3z">
                                            </path>
                                        </svg>
                                        <h2 class="title-font font-medium text-3xl text-gray-900">{{ $categories->count() }}</h2>
                                        <p class="leading-relaxed">Categories</p>
                                    </div>
                                </div>
                                
                                <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
                                    <div class="border-2 border-gray-200 px-4 py-6 rounded-lg text-center">
                                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block"
                                            viewBox="0 0 24 24">
                                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                        </svg>
                                        <h2 class="title-font font-medium text-3xl text-gray-900">{{ $countries->count() }}</h2>
                                        <p class="leading-relaxed">Countries</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </section>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
