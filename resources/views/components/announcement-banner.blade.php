<!-- Announcement Banner -->
<div class="bg-gradient-to-r from-red-500 via-purple-400 to-blue-500">
    <div class="max-w-[85rem] px-4 py-3 sm:px-6 lg:px-8 mx-auto">
      <!-- Grid -->
      <div class="grid justify-center md:grid-cols-2 md:justify-between md:items-center gap-2">
        <div class="text-center md:text-start md:order-2 md:flex md:justify-end md:items-center">
          <p class="me-5 inline-block text-sm font-semibold text-white">
            {{ __('¿Listo para comenzar?')}}
          </p>
          @if (Route::has('login'))
            @auth
              <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
              <a href="{{ route('login') }}" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-full border-2 border-white text-white hover:border-white/70 hover:text-white/70 disabled:opacity-50 disabled:pointer-events-none" href="#">
                {{ __('Comprar boletos')}}
              </a>
            @endauth
          @endif
        </div>
        <!-- End Col -->
  
        <div class="flex items-center">

          <x-secondary-modal 
              idModal="2" 
              title="Muy pronto..." 
              subTitle="Descarga la app para no perderte alguna novedad."
              closeButtonText="Cerrar" 
              saveButtonText="Aceptar">
            <x-slot name="content">
              <div class="block lg:hidden">
                <div class="relative mx-auto border-gray-300 dark:border-gray-800 bg-gray-300 dark:bg-gray-800 border-[7px] rounded-[1.25rem] h-[300px] w-[150px]">
                  <div class="h-[16px] w-[1.5px] bg-gray-300 dark:bg-gray-800 absolute -start-[8.5px] top-[36px] rounded-s-lg"></div>
                  <div class="h-[23px] w-[1.5px] bg-gray-300 dark:bg-gray-800 absolute -start-[8.5px] top-[62px] rounded-s-lg"></div>
                  <div class="h-[23px] w-[1.5px] bg-gray-300 dark:bg-gray-800 absolute -start-[8.5px] top-[89px] rounded-s-lg"></div>
                  <div class="h-[32px] w-[1.5px] bg-gray-300 dark:bg-gray-800 absolute -end-[8.5px] top-[71px] rounded-e-lg"></div>
                  <div class="rounded-[1rem] overflow-hidden w-[136px] h-[286px] bg-white dark:bg-gray-800">
                      <img src="{{asset('img/img-phone.jpeg')}}" class="dark:hidden w-[136px] h-[286px]" alt="">
                  </div>
                </div>
              </div>
              <div class="hidden lg:block">
                <div class="relative mx-auto border-gray-300 dark:border-gray-800 bg-gray-300 dark:bg-gray-800 border-[10px] rounded-[1.75rem] h-[420px] w-[210px]">
                  <div class="h-[22px] w-[2px] bg-gray-300 dark:bg-gray-800 absolute -start-[12px] top-[50px] rounded-s-lg"></div>
                  <div class="h-[32px] w-[2px] bg-gray-300 dark:bg-gray-800 absolute -start-[12px] top-[87px] rounded-s-lg"></div>
                  <div class="h-[32px] w-[2px] bg-gray-300 dark:bg-gray-800 absolute -start-[12px] top-[125px] rounded-s-lg"></div>
                  <div class="h-[45px] w-[2px] bg-gray-300 dark:bg-gray-800 absolute -end-[12px] top-[100px] rounded-e-lg"></div>
                  <div class="rounded-[1.4rem] overflow-hidden w-[190px] h-[400px] bg-white dark:bg-gray-800">
                      <img src="{{asset('img/img-phone.jpeg')}}" class="dark:hidden w-[190px] h-[400px]" alt="">
                  </div>
                </div>
              </div>
            </x-slot>
            <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-lg font-medium text-white hover:bg-white/10 transition-all text-sm" href="#">
                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="5 3 19 12 5 21 5 3"/></svg>
                {{ __('Mirar presentacion')}}
            </a>
          </x-secondary-modal>

          <x-secondary-modal 
              idModal="3" 
              title="Muy pronto..." 
              subTitle="Descarga la app para no perderte alguna novedad."
              closeButtonText="Cerrar" 
              saveButtonText="Aceptar">
            <x-slot name="content">
              <div class="block lg:hidden">
                <div class="relative mx-auto border-gray-300 dark:border-gray-800 bg-gray-300 dark:bg-gray-800 border-[7px] rounded-[1.25rem] h-[300px] w-[150px]">
                  <div class="h-[16px] w-[1.5px] bg-gray-300 dark:bg-gray-800 absolute -start-[8.5px] top-[36px] rounded-s-lg"></div>
                  <div class="h-[23px] w-[1.5px] bg-gray-300 dark:bg-gray-800 absolute -start-[8.5px] top-[62px] rounded-s-lg"></div>
                  <div class="h-[23px] w-[1.5px] bg-gray-300 dark:bg-gray-800 absolute -start-[8.5px] top-[89px] rounded-s-lg"></div>
                  <div class="h-[32px] w-[1.5px] bg-gray-300 dark:bg-gray-800 absolute -end-[8.5px] top-[71px] rounded-e-lg"></div>
                  <div class="rounded-[1rem] overflow-hidden w-[136px] h-[286px] bg-white dark:bg-gray-800">
                      <img src="{{asset('img/img-phone.jpeg')}}" class="dark:hidden w-[136px] h-[286px]" alt="">
                  </div>
                </div>
              </div>
              <div class="hidden lg:block">
                <div class="relative mx-auto border-gray-300 dark:border-gray-800 bg-gray-300 dark:bg-gray-800 border-[10px] rounded-[1.75rem] h-[420px] w-[210px]">
                  <div class="h-[22px] w-[2px] bg-gray-300 dark:bg-gray-800 absolute -start-[12px] top-[50px] rounded-s-lg"></div>
                  <div class="h-[32px] w-[2px] bg-gray-300 dark:bg-gray-800 absolute -start-[12px] top-[87px] rounded-s-lg"></div>
                  <div class="h-[32px] w-[2px] bg-gray-300 dark:bg-gray-800 absolute -start-[12px] top-[125px] rounded-s-lg"></div>
                  <div class="h-[45px] w-[2px] bg-gray-300 dark:bg-gray-800 absolute -end-[12px] top-[100px] rounded-e-lg"></div>
                  <div class="rounded-[1.4rem] overflow-hidden w-[190px] h-[400px] bg-white dark:bg-gray-800">
                      <img src="{{asset('img/img-phone.jpeg')}}" class="dark:hidden w-[190px] h-[400px]" alt="">
                  </div>
                </div>
              </div>
            </x-slot>
            <div class="flex items-center">
              <span class="inline-block border-e border-white/30 w-px h-5 mx-2"></span>
              <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-lg font-medium text-white hover:bg-white/10 transition-all text-sm" href="#">
                {{ __('Explorar novedades')}}
              </a>
            </div>
          </x-secondary-modal>

        </div>
        <!-- End Col -->
      </div>
      <!-- End Grid -->
    </div>
  </div>
  <!-- End Announcement Banner -->
