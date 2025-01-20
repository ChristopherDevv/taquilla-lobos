<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
        <script src="https://unpkg.com/jquery/dist/jquery.min.js"></script>

        @vite([
            'resources/css/app.css', 
            'resources/js/app.js', 
            'node_modules/apexcharts/dist/apexcharts.css',
            'node_modules/lodash/lodash.min.js', 
            'node_modules/dropzone/dist/dropzone-min.js',
            'node_modules/atropos/atropos.css',
            'node_modules/atropos/atropos.min.js',
            'node_modules/jquery/dist/jquery.min.js',
            'node_modules/datatables.net/js/dataTables.min.js',

           
        ])

        <!-- Styles -->
        @livewireStyles
    </head>
    
    <body>
        <script>
          /*   window.addEventListener('load', () => {
              (function () {
                const { dataTable } = new HSDataTable('#hs-datatable-with-export');
                const buttons = document.querySelectorAll('#hs-dropdown-datatable-with-export .hs-dropdown-menu button');
          
                buttons.forEach((btn) => {
                  const type = btn.getAttribute('data-hs-datatable-action-type');
          
                  btn.addEventListener('click', () => dataTable.button(`.buttons-${type}`).trigger());
                });
              })();
            }); */
          </script>
          
        <div class="min-h-screen text-gray-600">
            <!-- Page Content -->
             <!-- Page Heading -->
             @if (isset($header))
             <header class="bg-white dark:bg-gray-800 shadow">
                 <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                     {{ $header }}
                 </div>
             </header>
         @endif
            <main id="content">
                <div wire:loading class="fixed top-0 right-0 h-screen w-screen z-50 flex justify-center items-center">
                    <div class="animate-spin rounded-full h-32 w-32 border-t-2 border-b-2 border-gray-900"></div>
                </div>
                <x-announcement-banner />
                @livewire('web.components.guest-navigation-menu')
                    
                {{ $slot }}
            </main>
            <div data-aos="fade-right" data-aos-duration="2000">
                <x-footer></x-footer>
            </div>
        </div>

        @livewireScripts
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
        <script src="https://preline.co/assets/js/hs-apexcharts-helpers.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    </body>
</html>


