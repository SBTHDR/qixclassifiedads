<div class="flex flex-wrap -m-2">
    <div class="p-2 w-full">
        <div class="relative">
            <label for="category_id" class="leading-7 text-sm text-gray-600">Category</label>
            <select wire:model="selectedCategory" name="category_id" id="category_id" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>                            
            @error('category_id')
            <div>
                <span class="text-red-400">{{ $message }}</span>
            </div>
            @enderror
        </div>
    </div>
    @if (!is_null($selectedCategory))    
    <div class="p-2 w-1/2">
        <div class="relative">
            <label for="sub_category_id" class="leading-7 text-sm text-gray-600">Sub Category</label>
            <select wire:model="selectedSubCategory" name="sub_category_id" id="sub_category_id" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                <option value="">Select sub Category</option>
                @foreach ($subCategories as $subcategory)
                    <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                @endforeach
            </select>                            
            @error('sub_category_id')
            <div>
                <span class="text-red-400">{{ $message }}</span>
            </div>
            @enderror
        </div>
    </div>
    @endif
    @if (!is_null($selectedSubCategory))    
    <div class="p-2 w-1/2">
        <div class="relative">
            <label for="child_category_id" class="leading-7 text-sm text-gray-600">Child Category</label>
            <select name="child_category_id" id="child_category_id" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                <option value="">Select child Category</option>
                @foreach ($childCategories as $childcategory)
                    <option value="{{ $childcategory->id }}">{{ $childcategory->name }}</option>
                @endforeach
            </select>                            
            @error('child_category_id')
            <div>
                <span class="text-red-400">{{ $message }}</span>
            </div>
            @enderror
        </div>
    </div>
    @endif
</div>