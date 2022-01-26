<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon.svg') }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            <!-- Page Heading -->
            {{ $header }}
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts

        <script>
            function filterResults() {
                let href = 'all-listings?';
                var title = document.getElementById("title").value;
                var country = document.getElementById("country").value;
                var category = document.getElementById("category").value;
                var maxPrice = document.getElementById("maxPrice").value;
                if (title.length) {
                    href += 'filter[title]=' + title;
                }
                if (category.length) {
                    href += '&filter[category_id]=' + category
                }
                if (country.length) {
                    href += '&filter[country_id]=' + country
                }
                if (maxPrice.length) {
                    href += '&filter[max_price]=' + maxPrice
                }
                document.location.href = href;
            }
            document.getElementById("filter").addEventListener("click", filterResults);
        </script>
    </body>
</html>
