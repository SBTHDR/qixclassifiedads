<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Countries') }}
            </h2>
            <a href="{{ route('countries.create') }}" class="text-white px-4 py-2 bg-indigo-500 rounded">Create
                Country
            </a>
        </div>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <!-- This example requires Tailwind CSS v2.0+ -->
                @if ($countries->count() >= 1)
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Country Name
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Country Code
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Manage
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach ($countries as $country)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div>
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $country->name }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="#"
                                                    class="text-indigo-600 hover:text-indigo-900">{{ $country->country_code }}
                                                </a>
                                            </td>
                                            
                                            <td
                                                class="px-6 py-4 whitespace-nowrap text-sm font-medium flex items-center gap-2">
                                                <a href="{{ route('countries.edit', $country->id) }}"
                                                    class="text-white px-4 py-2 bg-indigo-500 rounded">Edit</a>
                                                <form action="{{ route('countries.destroy', $country->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="text-white px-4 py-2 bg-red-400 rounded show_confirm">
                                                        {{ __('Delete') }}
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach

                                        <!-- More people... -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <P class="p-3">Country list is empty!</P>
                @endif

            </div>
            <div class="mt-5">
                {{ $countries->links() }}
            </div>
        </div>
    </div>
    @flasher_render
</x-app-layout>
