<x-guest-layout>
        
{{--   @if (Route::has('login'))
  <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
      @auth
          <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
      @else
          <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

          @if (Route::has('register'))
              <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
          @endif
      @endauth
  </div>
@endif --}}

<div>
  <x-cookie-banner />
</div>

<!-- Hero -->
<div class="relative before:absolute before:top-0 before:inset-x-0 before:bg-[url('https://preline.co/assets/svg/component/floor-tile.svg')] before:bg-no-repeat before:bg-top before:size-full before:-z-[1]" style="zoom: 1;">

    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-24 mx-auto">
      <!-- Title -->
      <div class="max-w-2xl mx-auto text-center mb-10" data-aos="fade-up" data-aos-duration="2000">
        <h2 class="text-3xl leading-tight font-bold md:text-4xl md:leading-tight lg:text-5xl text-tw-bg-primary-600">
          {{ __('Lobos plateados de')}} <span class="lg:leading-tight bg-clip-text bg-gradient-to-r from-tw-text-secondary-500 to-violet-500 text-transparent">Puebla</span>
        </h2>
        <p class="mt-2 lg:text-lg text-gray-800 dark:text-neutral-200">{{ __('Descubre lo nuevo de los Lobos plateados de Puebla.')}}</p>
        {{-- 
        <span style="background-image: url({{ asset('img/img-pen-drawing.svg') }}); background-repeat: no-repeat; background-position: 0 50%; background-size: 100%;" class="relative text-blue-600 px-[2%] pb-[6%] -ms-[2%] -mb-[6%] before:absolute before:top-0 before:end-0 before:z-10 before:bg-[length:24px_24px] before:size-6 before:block before:-me-3 before:-mt-2 before:-rotate-12 sm:before:bg-[length:32px_32px] sm:before:size-8 text-xl">free</span>      
       --}}
      </div>
      <!-- End Title -->

      <!-- Switch -->
      <div class="flex justify-center items-center">
        <label for="pricing-switch" class="min-w-14 text-sm text-gray-600 me-3 dark:text-neutral-400">
          {{__('Partidos')}}
        </label>

        {{-- Special secondary button --}}
        <div class='flex items-center justify-center relative'>
            <div class="animate-ping absolute inline-flex h-9 w-[75px] rounded-full bg-tw-bg-secondary-500 opacity-75"></div>
            <a href="{{route('gamesAvailable')}}" wire:navigate class="h-10 flex items-center justify-center w-full relative z-5">
                <div class='cursor-pointer transition-all bg-tw-bg-secondary-500 text-white font-semibold px-6 py-2 rounded-full
                        border-tw-border-secondary-600 border-b-[4px] hover:brightness-110 hover:-translate-y-[1px] hover:border-b-[6px] active:border-b-[2px] 
                        active:brightness-90 active:translate-y-[2px]'>
                {{ __('Ver mas')}}
                </div>  
              </a>
        </div>

        {{-- End special secondary button --}}

        <label for="pricing-switch" class="min-w-14 text-sm text-gray-600 ms-3 dark:text-neutral-400">
          {{__('Boletos')}}
        </label>
      </div>
      <!-- End Switch -->

      <div class="relative">
        <select data-hs-select='{
            "placeholder": "Select option...",
            "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
            "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-neutral-600",
            "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto dark:bg-neutral-900 dark:border-neutral-700",
            "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
            "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-blue-600 dark:text-blue-500 \" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>"
          }'>
          <option value="">Choose</option>
          <option>Name</option>
          <option>Email address</option>
          <option>Description</option>
          <option>User ID</option>
        </select>
      
        <div class="absolute top-1/2 end-2.5 -translate-y-1/2">
          <svg class="shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m7 15 5 5 5-5"></path>
            <path d="m7 9 5-5 5 5"></path>
          </svg>
        </div>
      </div>


      <div data-hs-file-upload='{
        "url": "/upload",
        "extensions": {
          "default": {
            "class": "shrink-0 size-5"
          },
          "xls": {
            "class": "shrink-0 size-5"
          },
          "zip": {
            "class": "shrink-0 size-5"
          },
          "csv": {
            "icon": "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"M4 22h14a2 2 0 0 0 2-2V7l-5-5H6a2 2 0 0 0-2 2v4\"/><path d=\"M14 2v4a2 2 0 0 0 2 2h4\"/><path d=\"m5 12-3 3 3 3\"/><path d=\"m9 18 3-3-3-3\"/></svg>",
            "class": "shrink-0 size-5"
          }
        }
      }'>
        <template data-hs-file-upload-preview="">
          <div class="p-3 bg-white border border-solid border-gray-300 rounded-xl">
            <div class="mb-1 flex justify-between items-center">
              <div class="flex items-center gap-x-3">
                <span class="size-10 flex justify-center items-center border border-gray-200 text-gray-500 rounded-lg" data-hs-file-upload-file-icon="">
                  <img class="rounded-lg hidden" data-dz-thumbnail="">
                </span>
                <div>
                  <p class="text-sm font-medium text-gray-800">
                    <span class="truncate inline-block max-w-[300px] align-bottom" data-hs-file-upload-file-name=""></span>.<span data-hs-file-upload-file-ext=""></span>
                  </p>
                  <p class="text-xs text-gray-500" data-hs-file-upload-file-size=""></p>
                </div>
              </div>
              <div class="flex items-center gap-x-2">
                <button type="button" class="text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-800" data-hs-file-upload-remove="">
                  <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M3 6h18"></path>
                    <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                    <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                    <line x1="10" x2="10" y1="11" y2="17"></line>
                    <line x1="14" x2="14" y1="11" y2="17"></line>
                  </svg>
                </button>
              </div>
            </div>
      
            <div class="flex items-center gap-x-3 whitespace-nowrap">
              <div class="flex w-full h-2 bg-gray-200 rounded-full overflow-hidden" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" data-hs-file-upload-progress-bar="">
                <div class="flex flex-col justify-center rounded-full overflow-hidden bg-blue-600 text-xs text-white text-center whitespace-nowrap transition-all duration-500 hs-file-upload-complete:bg-green-500" style="width: 0" data-hs-file-upload-progress-bar-pane=""></div>
              </div>
              <div class="w-10 text-end">
                <span class="text-sm text-gray-800">
                  <span data-hs-file-upload-progress-bar-value="">0</span>%
                </span>
              </div>
            </div>
          </div>
        </template>
      
        <div class="cursor-pointer p-12 flex justify-center bg-white border border-dashed border-gray-300 rounded-xl" data-hs-file-upload-trigger="">
          <div class="text-center">
            <span class="inline-flex justify-center items-center size-16 bg-gray-100 text-gray-800 rounded-full">
              <svg class="shrink-0 size-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                <polyline points="17 8 12 3 7 8"></polyline>
                <line x1="12" x2="12" y1="3" y2="15"></line>
              </svg>
            </span>
      
            <div class="mt-4 flex flex-wrap justify-center text-sm leading-6 text-gray-600">
              <span class="pe-1 font-medium text-gray-800">
                Drop your file here or
              </span>
              <span class="bg-white font-semibold text-blue-600 hover:text-blue-700 rounded-lg decoration-2 hover:underline focus-within:outline-none focus-within:ring-2 focus-within:ring-blue-600 focus-within:ring-offset-2">browse</span>
            </div>
      
            <p class="mt-1 text-xs text-gray-400">
              Pick a file up to 2MB.
            </p>
          </div>
        </div>
      
        <div class="mt-4 space-y-2 empty:mt-0" data-hs-file-upload-previews=""></div>
      </div>
      
      

    </div>

</div>
<!-- End Hero -->
<div>
  <x-secondary-carousel></x-secondary-carousel>
</div>

{{-- Primary carousel --}}
<div class="max-w-[85rem] px-4 pt-10 sm:px-6 lg:px-8 mx-auto">
  <div data-aos="fade-right" data-aos-duration="2000">
    <x-social-media-banner></x-social-media-banner>
  </div>
  <div data-aos="fade-up" data-aos-duration="2000">
    <x-carousel></x-carousel>
  </div>
</div>
{{-- End primary carousel --}}


<div class="mt-5"  data-aos="fade-up" data-aos-duration="2000">
  <x-testimonials></x-testimonials>
</div>

<div class="pb-4 mt-10 max-w-[85rem] mx-auto" data-aos="fade-right" data-aos-duration="2000">
  <div class="block max-w-[85rem] h-[350px] sm:h-[400px] md:h-[500px] lg:h-[600px] xl:h-[650px] border border-gray-200 rounded-xl overflow-hidden dark:border-neutral-700">
    <iframe  class="size-full" src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fdesign%2FKbckOxyLopC6UtNAGYw5SD%2FUntitled%3Fnode-id%3D0-1%26t%3DOTLdFyoGVqPJu0wh-1" allowfullscreen></iframe>
  </div>

  <svg aria-hidden="true" class="h-4 -mt-px mx-auto" width="197" height="10" viewBox="0 0 197 10" fill="none" xmlns="http://www.w3.org/2000/svg">
    <rect x="9" width="180" height="1" fill="url(#paint0_linear_4701_109440as12)"></rect>
    <g filter="url(#filter0_f_4701_109440)">
      <rect x="8.5" width="180" height="2" fill="url(#paint1_linear_4701_1094402rcq)"></rect>
    </g>
    <defs>
      <filter id="filter0_f_4701_109440" x="0.5" y="-8" width="196" height="18" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
        <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
        <feGaussianBlur stdDeviation="4" result="effect1_foregroundBlur_4701_109440"></feGaussianBlur>
      </filter>
      <linearGradient id="paint0_linear_4701_109440as12" x1="189" y1="0.0115203" x2="8.99968" y2="0.0726221" gradientUnits="userSpaceOnUse">
        <stop offset="0%" stop-color="#E5E7EB" stop-opacity="0.1"></stop>
        <stop offset="0.497397" stop-color="#D1D5DB"></stop>
        <stop offset="1" stop-color="#E5E7EB" stop-opacity="0.1"></stop>
      </linearGradient>
      <linearGradient id="paint1_linear_4701_1094402rcq" x1="188.5" y1="0.0230407" x2="8.49967" y2="0.0535915" gradientUnits="userSpaceOnUse">
        <stop offset="0%" stop-color="#E5E7EB" stop-opacity="0.1"></stop>
        <stop offset="0.497397" stop-color="#9CA3AF"></stop>
        <stop offset="1" stop-color="#E5E7EB" stop-opacity="0.1"></stop>
      </linearGradient>
    </defs>
  </svg>
</div>


<div data-aos="fade-up" data-aos-duration="2000">
  <x-asked-questions></x-asked-questions>
</div>

</x-guest-layout>


