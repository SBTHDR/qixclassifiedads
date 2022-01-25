<div class="flex flex-wrap -m-2">
    <div class="p-2 w-full">
        <div class="relative">
            <label for="featured_image" class="leading-7 text-sm text-gray-600">Featured Image</label>
            @if ($featuredImage)
                Photo Preview:
                <img src="{{ $featuredImage->temporaryUrl() }}">
            @endif
            <input wire:model="featuredImage" type="file" id="featured_image" name="featured_image"
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
            @if ($imageOne)
                Photo Preview:
                <img src="{{ $imageOne->temporaryUrl() }}">
            @endif
            <input wire:model="imageOne" type="file" id="image_one" name="image_one"
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
            @if ($imageTwo)
                Photo Preview:
                <img src="{{ $imageTwo->temporaryUrl() }}">
            @endif
            <input wire:model="imageTwo" type="file" id="image_two" name="image_two"
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
            @if ($imageThree)
                Photo Preview:
                <img src="{{ $imageThree->temporaryUrl() }}">
            @endif
            <input wire:model="imageThree" type="file" id="image_three" name="image_three"
                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            @error('image_three')
            <div>
                <span class="text-red-400">{{ $message }}</span>
            </div>
            @enderror
        </div>
    </div>
</div>