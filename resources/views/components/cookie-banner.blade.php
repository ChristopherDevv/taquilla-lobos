<div id="cookies-with-stacked-buttons" class="fixed bottom-0 end-0 z-[60] sm:max-w-sm w-full mx-auto p-6">
    <!-- Card -->
    <div class="p-4 bg-white/60 backdrop-blur-md rounded-xl shadow-2xl dark:bg-neutral-900/60 dark:shadow-black/70">
      <div class="flex justify-between items-center gap-x-5 sm:gap-x-10">
        <h2 class="font-semibold text-gray-800 dark:text-white">
          {{__('Configuracion de cookies')}}
        </h2>
        <button type="button" class="inline-flex rounded-full p-2 text-gray-500 hover:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-gray-600 dark:hover:bg-neutral-800 dark:text-neutral-300" data-hs-remove-element="#cookies-with-stacked-buttons">
          <span class="sr-only">Dismiss</span>
          <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg>
        </button>
      </div>
      <p class="mt-2 text-sm text-gray-800 dark:text-neutral-200">
        {{__('Utilizamos cookies para mejorar su experiencia y para marketing. Visite nuestra')}} <a class="inline-flex items-center gap-x-1.5 text-blue-600 decoration-2 hover:underline font-medium dark:text-blue-500" href="#">{{__(' política de cookies')}}</a> {{__('para obtener más información.')}}
      </p>
      <div class="mt-5 mb-2 w-full flex gap-x-2">
        <div class="grid w-full">
          <x-secondary-modal 
              idModal="1" 
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
            <x-secondary-button class="w-full">
              {{__('Aceptar')}}
            </x-secondary-button>
          </x-secondary-modal>
        </div>
        <div class="grid w-full" data-hs-remove-element="#cookies-with-stacked-buttons">
          <x-button class="w-full">
            {{__('Rechazar')}}
          </x-button>
        </div>
      </div>
    </div>
    <!-- End Card -->
</div>