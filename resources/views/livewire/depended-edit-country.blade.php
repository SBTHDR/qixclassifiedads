<div class="flex flex-wrap -m-2">
    <div class="p-2 w-full">
        <div class="relative">
            <label for="country_id" class="leading-7 text-sm text-gray-600">Country</label>
            <select wire:model="selectedCountry" name="country_id" id="country_id" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">                
                @foreach ($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
            </select>                            
            @error('country_id')
            <div>
                <span class="text-red-400">{{ $message }}</span>
            </div>
            @enderror
        </div>
    </div>
    @if (!is_null($selectedCountry))
    <div class="p-2 w-1/2">
        <div class="relative">
            <label for="state_id" class="leading-7 text-sm text-gray-600">State</label>
            <select wire:model="selectedState" name="state_id" id="state_id" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                @foreach ($states as $state)
                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                @endforeach
            </select>                            
            @error('state_id')
            <div>
                <span class="text-red-400">{{ $message }}</span>
            </div>
            @enderror
        </div>
    </div>
    @endif
    @if (!is_null($selectedState))    
    <div class="p-2 w-1/2">
        <div class="relative">
            <label for="city_id" class="leading-7 text-sm text-gray-600">City</label>
            <select name="city_id" id="city_id" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                @foreach ($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>                            
            @error('city_id')
            <div>
                <span class="text-red-400">{{ $message }}</span>
            </div>
            @enderror
        </div>
    </div>
    @endif
</div>