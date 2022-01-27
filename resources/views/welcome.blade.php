<x-main-layout>
    <x-slot name="header">
        <x-main-header></x-main-header>
    </x-slot>
    <section>
        <x-main-hero></x-main-hero>
    </section>
    <section>
        <x-main-section>
            @foreach ($categories as $category)    
                <div class="xl:w-1/3 md:w-1/2 p-4 text-center">
                    <div class="border border-gray-200 hover:bg-indigo-100 p-6 rounded-lg cursor-pointer">
                    {{-- <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4 cursor-pointer">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg>
                        
                    </div> --}}
                    <img src="{{ asset('uploads/categories/' . $category->image) }}" alt="" class="inline-flex items-center justify-center rounded-full" width="50">
                    <h2 class="text-2xl text-gray-700 font-medium title-font mb-2 cursor-pointer">{{ $category->name }}</h2>
                    <p class="leading-relaxed text-base cursor-pointer">{{ $category->listings->count() }} Ads</p>
                    </div>
                </div>
            @endforeach
        </x-main-section>
        <x-main-featured>
            @foreach ($featured_ads as $featured_ad)
                <div class="p-4 md:w-1/3 flex flex-col text-center items-center">
                    <a href="{{ route('all-listings.show', $featured_ad->id) }}" class="block relative h-48 rounded overflow-hidden">
                        <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                        src="{{ Storage::url($featured_ad->featured_image) }}" width="260">
                    </a>
                    <div class="flex-grow mt-3">
                    <a href="{{ route('all-listings.show', $featured_ad->id) }}">
                        <p class="text-gray-900 text-lg title-font font-medium mb-3 cursor-pointer ">{{ $featured_ad->title }}</p>
                    </a>
                    </div>
                    <div class="flex gap-2">
                        <h2 class="leading-relaxed text-base cursor-pointer">Type: {{ $featured_ad->condition }}</h2>
                        <h2 class="leading-relaxed text-base cursor-pointer">Location: {{ $featured_ad->location }}</h2>
                    </div>
                    <a href="{{ route('all-listings.show', $featured_ad->id) }}" class="mt-3 text-indigo-500 inline-flex items-center cursor-pointer">Price: $ {{ $featured_ad->price }}
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            @endforeach
        </x-main-featured>
    </section>
    <x-main-footer></x-main-footer>
</x-main-layout>