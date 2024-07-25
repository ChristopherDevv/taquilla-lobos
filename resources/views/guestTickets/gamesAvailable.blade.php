<x-guest-layout>
        
    <section class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-10 mx-auto">
          <div data-aos="fade-right" data-aos-duration="2000">
            <!-- Blockquote -->
            <blockquote class="relative">
              <svg class="absolute top-0 start-0 transform -translate-x-2 -translate-y-12 size-16 text-gray-200 dark:text-neutral-700" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path d="M7.39762 10.3C7.39762 11.0733 7.14888 11.7 6.6514 12.18C6.15392 12.6333 5.52552 12.86 4.76621 12.86C3.84979 12.86 3.09047 12.5533 2.48825 11.94C1.91222 11.3266 1.62421 10.4467 1.62421 9.29999C1.62421 8.07332 1.96459 6.87332 2.64535 5.69999C3.35231 4.49999 4.33418 3.55332 5.59098 2.85999L6.4943 4.25999C5.81354 4.73999 5.26369 5.27332 4.84476 5.85999C4.45201 6.44666 4.19017 7.12666 4.05926 7.89999C4.29491 7.79332 4.56983 7.73999 4.88403 7.73999C5.61716 7.73999 6.21938 7.97999 6.69067 8.45999C7.16197 8.93999 7.39762 9.55333 7.39762 10.3ZM14.6242 10.3C14.6242 11.0733 14.3755 11.7 13.878 12.18C13.3805 12.6333 12.7521 12.86 11.9928 12.86C11.0764 12.86 10.3171 12.5533 9.71484 11.94C9.13881 11.3266 8.85079 10.4467 8.85079 9.29999C8.85079 8.07332 9.19117 6.87332 9.87194 5.69999C10.5789 4.49999 11.5608 3.55332 12.8176 2.85999L13.7209 4.25999C13.0401 4.73999 12.4903 5.27332 12.0713 5.85999C11.6786 6.44666 11.4168 7.12666 11.2858 7.89999C11.5215 7.79332 11.7964 7.73999 12.1106 7.73999C12.8437 7.73999 13.446 7.97999 13.9173 8.45999C14.3886 8.93999 14.6242 9.55333 14.6242 10.3Z" fill="currentColor"></path>
              </svg>
      
              <h2 class="text-3xl relative z-5 leading-tight font-bold md:text-3xl md:leading-tight lg:text-3xl text-tw-bg-primary-600">
                {{ __('Locacion y ')}} <span class="lg:leading-tight bg-clip-text bg-gradient-to-r from-tw-text-secondary-500 to-violet-500 text-transparent">{{ __(' partidos ')}}</span> <span>{{ __(' dispobibles ')}}</span>
              </h2>
            </blockquote>
            <!-- End Blockquote -->
          </div>

          <div class="flex flex-col md:flex-row items-center gap-10 mt-10" data-aos="fade-up" data-aos-duration="2000">
            <div class="h-80 w-full lg:w-[30%] shadow-2xl rounded-xl">
                <iframe class="sixe-full h-80 w-full rounded-2xl" src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fdesign%2FyuNaNMarm7x2QuNvbad8H5%2FUntitled%3Fnode-id%3D0-1%26t%3DH3jjfOy4aTd7prAd-1" allowfullscreen></iframe>
            </div>
            <div id="leaflet-map" class="h-80 w-full lg:w-[70%] shadow-2xl rounded-2xl z-0"></div>
          </div>
        <!-- Features -->
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <!-- Tab Nav -->
            <nav class="max-w-6xl mx-auto grid sm:flex gap-y-px sm:gap-y-0 sm:gap-x-4" aria-label="Tabs" role="tablist">
            <button data-aos="fade-up" data-aos-duration="2000" type="button" class="hs-tab-active:bg-gradient-to-b hs-tab-active:from-gray-200 hs-tab-active:to-white transition-all duration-300 hs-tab-active:hover:border-transparent w-full flex flex-col text-start hover:bg-gray-100 p-3 md:p-5 rounded-xl active" id="tabs-with-card-item-1" data-hs-tab="#tabs-with-card-1" aria-controls="tabs-with-card-1" role="tab">
                <svg class="flex-shrink-0 transition-all duration-100 sm:block size-7 hs-tab-active:text-tw-bg-secondary-500 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"/><path d="M5 3v4"/><path d="M19 17v4"/><path d="M3 5h4"/><path d="M17 19h4"/></svg>
                <span class="mt-5">
                    <span class="hs-tab-active:bg-clip-text hs-tab-active:bg-gradient-to-r hs-tab-active:from-tw-text-secondary-500 hs-tab-active:to-violet-500 hs-tab-active:text-transparent block font-extrabold text-gray-800 transition-all duration-500">Lobos plateados VS Halcones de Xalapa</span>
                    <span class="lg:block mt-2 text-gray-800">08 de Junio del 2024</span>
                </span>
            </button>
        
            <button data-aos="fade-up" data-aos-duration="2000" type="button" class="hs-tab-active:bg-gradient-to-b hs-tab-active:from-gray-200 hs-tab-active:to-white transition-all duration-300 hs-tab-active:bg-gray-100 hs-tab-active:hover:border-transparent w-full flex flex-col text-start hover:bg-gray-100 p-3 md:p-5 rounded-xl" id="tabs-with-card-item-2" data-hs-tab="#tabs-with-card-2" aria-controls="tabs-with-card-2" role="tab">
                <svg class="flex-shrink-0  transition-all duration-100 sm:block size-7 hs-tab-active:text-tw-bg-secondary-500 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"/><path d="M5 3v4"/><path d="M19 17v4"/><path d="M3 5h4"/><path d="M17 19h4"/></svg>
                <span class="mt-5">
                    <span class="hs-tab-active:bg-clip-text hs-tab-active:bg-gradient-to-r hs-tab-active:from-tw-text-secondary-500 hs-tab-active:to-violet-500 hs-tab-active:text-transparent block font-extrabold text-gray-800 transition-all duration-500">Lobos plateados VS Halcones de Xalapa</span>
                    <span class="lg:block mt-2 text-gray-800">08 de Junio del 2024</span>
                </span>
            </button>
        
            <button data-aos="fade-up" data-aos-duration="2000" type="button" class="hs-tab-active:bg-gradient-to-b hs-tab-active:from-gray-200 hs-tab-active:to-white transition-all duration-300 hs-tab-active:bg-gray-100 hs-tab-active:hover:border-transparent w-full flex flex-col text-start hover:bg-gray-100 p-3 md:p-5 rounded-xl" id="tabs-with-card-item-3" data-hs-tab="#tabs-with-card-3" aria-controls="tabs-with-card-3" role="tab">
                <svg class="flex-shrink-0  transition-all duration-100 sm:block size-7 hs-tab-active:text-tw-bg-secondary-500 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z"/><path d="M5 3v4"/><path d="M19 17v4"/><path d="M3 5h4"/><path d="M17 19h4"/></svg>
                <span class="mt-5">
                    <span class="hs-tab-active:bg-clip-text hs-tab-active:bg-gradient-to-r hs-tab-active:from-tw-text-secondary-500 hs-tab-active:to-violet-500 hs-tab-active:text-transparent block font-extrabold text-gray-800 transition-all duration-500">Lobos plateados VS Halcones de Xalapa</span>
                    <span class="lg:block mt-2 text-gray-800">08 de Junio del 2024</span>
                </span>
            </button>
            </nav>
            <!-- End Tab Nav -->
        
            <!-- Tab Content -->
            <div class="mt-12 md:mt-16">
                <div id="tabs-with-card-1" role="tabpanel" aria-labelledby="tabs-with-card-item-1">
                    <!-- Devices -->
                    {{-- <div class="max-w-6xl h-[350px] mx-auto overflow-hidden rounded-2xl shadow-2xl bg-center bg-cover flex items-center justify-center" style="background-image: url({{asset('img/img-basketball-1.jpeg')}})">
                        <a class="bg-white backdrop-blur-md px-10 py-5 bg-opacity-50 text-white font-extrabold uppercase rounded-full">
                            <span>{{ __(' adquirir boletos ')}}</span>
                        </a>
                    </div> --}}
                    <div class="flex items-center justify-center relative rounded-xl">
                        <img class="w-full md:w-[60%] rounded-xl h-auto" src="{{asset('img/img-basketball-1.jpeg')}}" alt="">
                        <a class="bg-white backdrop-blur-md px-10 py-5 rounded-b-xl cursor-pointer text-center bg-opacity-50 text-white font-extrabold uppercase w-full lg:w-[65%] absolute bottom-0 ">
                            <span>{{ __(' adquirir boletos ')}}</span>
                        </a>
                    </div>
                    <!-- End Devices -->
                </div>
            
                <div id="tabs-with-card-2" class="hidden" role="tabpanel" aria-labelledby="tabs-with-card-item-2">
                    <!-- Devices -->
                    <div class="flex items-center justify-center relative rounded-xl">
                        <img class="w-full md:w-[60%] rounded-xl h-auto" src="{{asset('img/img-basketball-2.jpeg')}}" alt="">
                        <a class="bg-white backdrop-blur-md px-10 py-5 rounded-b-xl cursor-pointer text-center bg-opacity-50 text-white font-extrabold uppercase w-full lg:w-[65%] absolute bottom-0 ">
                            <span>{{ __(' adquirir boletos ')}}</span>
                        </a>
                    </div>
                    <!-- End Devices -->
                </div>
            
                <div id="tabs-with-card-3" class="hidden" role="tabpanel" aria-labelledby="tabs-with-card-item-3">
                    <!-- Devices -->
                    <div class="flex items-center justify-center relative rounded-xl">
                        <img class="w-full md:w-[60%] rounded-xl h-auto" src="{{asset('img/img-basketball-3.jpeg')}}" alt="">
                        <a class="bg-white backdrop-blur-md px-10 py-5 rounded-b-xl cursor-pointer text-center bg-opacity-50 text-white font-extrabold uppercase w-full lg:w-[65%] absolute bottom-0 ">
                            <span>{{ __(' adquirir boletos ')}}</span>
                        </a>
                    </div>
                    <!-- End Devices -->
                </div>
            </div>
            <!-- End Tab Content -->
        </div>
        <!-- End Features -->

    </section>
    
</x-guest-layout>
    
    
    