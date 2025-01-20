<nav x-data="{ open: false }" class="block sticky top-0 start-0 z-10 py-2 bg-white/60 backdrop-blur-md">
         <!-- Header -->
         <header class="flex flex-wrap md:justify-start md:flex-nowrap w-full text-sm py-3 md:py-0">
            <nav class="max-w-[85rem] w-full mx-auto px-4 md:px-6 lg:px-8" aria-label="Global">
              <div class="relative md:flex md:items-center md:justify-between">
                <div class="flex items-center justify-between">

                  <a class="flex items-center justify-between gap-2" href="/" wire:navigate>
                    <x-application-logo class="h-auto w-12" />
                    <h1 class="text-tw-text-primary-600 font-normal text-md uppercase">{{ $message }}</h1>
                  </a>
                  
      
                  <div class="md:hidden">
                    <button type="button" class="hs-collapse-toggle size-9 flex justify-center items-center text-sm font-semibold rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-800 dark:hover:bg-neutral-700" data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
                      <svg class="hs-collapse-open:hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
                      <svg class="hs-collapse-open:block hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                    </button>
                  </div>
                </div>
      
                <div id="navbar-collapse-with-animation" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block">
                  <div class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                    <div class="flex flex-col gap-x-0 mt-5 divide-y divide-dashed divide-gray-200 md:flex-row md:items-center md:justify-end md:gap-x-7 md:mt-0 md:ps-7 md:divide-y-0 md:divide-solid dark:divide-neutral-700">
                      <a href="/" wire:navigate class="flex items-center gap-1 text-gray-600 hover:text-gray-400 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-5 h-5" viewBox="0 0 24 24"><path d="M12.71 2.29a1 1 0 0 0-1.42 0l-9 9a1 1 0 0 0 0 1.42A1 1 0 0 0 3 13h1v7a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-7h1a1 1 0 0 0 1-1 1 1 0 0 0-.29-.71zM6 20v-9.59l6-6 6 6V20z"></path></svg>
                        <div class="font-medium py-3 md:py-6 dark:text-neutral-400 dark:hover:text-neutral-500">
                          {{ __('Inicio') }}
                        </div>
                      </a>

                      <a href="#" class="relative flex items-center gap-1 text-gray-600 hover:text-gray-400 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-5 h-5" viewBox="0 0 24 24"><path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path></svg>
                        <div class="font-medium py-3 md:py-6 dark:text-neutral-400 dark:hover:text-neutral-500">
                          {{ __('Acerca de') }}
                        </div>
                        <span class="hidden absolute top-[5x] left-[-13px] transform translate-x-[80%] -translate-y-[110%] lg:flex h-2.5 w-2.5s">
                          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-tw-bg-secondary-400 opacity-75"></span>
                          <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-tw-bg-secondary-500"></span>
                        </span>
                      </a>
      
                      <div class="hs-dropdown [--strategy:static] md:[--strategy:absolute] [--adaptive:none] md:[--trigger:hover] py-3 md:py-4">
                        <button type="button" class="relative flex items-center gap-1 w-full text-gray-600 hover:text-gray-400 transition-colors duration-300 font-medium dark:text-neutral-400 dark:hover:text-neutral-500">
                          <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-5 h-5" viewBox="0 0 24 24"><path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path></svg>
                          <span class="block">{{ __('Recursos') }}</span>   
                          <span class="hidden absolute top-[5x] left-[-13px] transform translate-x-[30%] -translate-y-[80%] lg:flex">
                            <div class="text-[8px] border-tw-bg-secondary-500 border bg-red-50 text-tw-bg-secondary-500 px-2 py-[0px] rounded-full">Nuevo</div>
                          </span>                     
                        </button>
      
                        <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[250ms] hs-dropdown-open:opacity-100 opacity-0 w-full hidden z-10 top-full start-0 min-w-60 bg-white md:shadow-2xl rounded-lg py-2 md:p-4 dark:bg-neutral-900 dark:divide-neutral-700 before:absolute before:-top-5 before:start-0 before:w-full before:h-5">
                          <div class="md:grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <div class="flex flex-col mx-1 md:mx-0">
                              <a class="group flex gap-x-5 text-gray-800 transition-colors duration-300 hover:bg-gray-100 rounded-lg p-4 dark:text-neutral-200 dark:hover:bg-neutral-800" href="#">
                                <svg class="flex-shrink-0 size-5 mt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                                <div class="grow">
                                  <p class="font-medium text-gray-800 dark:text-neutral-200">{{__('Ayuda y soporte')}}</p>
                                  <p class="text-sm text-gray-500 group-hover:text-gray-800 dark:text-neutral-500 dark:group-hover:text-neutral-200">{{__('Obten ayuda para resolver cada duda con respecto a los lobos plateados')}}</p>
                                </div>
                              </a>
      
                              <a class="group flex gap-x-5 text-gray-800 transition-colors duration-300 hover:bg-gray-100 rounded-lg p-4 dark:text-neutral-200 dark:hover:bg-neutral-800" href="#">
                                <svg class="flex-shrink-0 size-5 mt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="7" height="7" x="14" y="3" rx="1"/><path d="M10 21V8a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1H3"/></svg>
                                <div class="grow">
                                  <p class="font-medium text-gray-800 dark:text-neutral-200">{{__('Aplicaciones')}}</p>
                                  <p class="text-sm text-gray-500 group-hover:text-gray-800 dark:text-neutral-500 dark:group-hover:text-neutral-200">{{__('Descubre las nuevas caracteriticas que tiene la aplicacion de lobos platados')}}</p>
                                </div>
                              </a>
      
                              <a class="group flex gap-x-5 text-gray-800 transition-colors duration-300 hover:bg-gray-100 rounded-lg p-4 dark:text-neutral-200 dark:hover:bg-neutral-800" href="#">
                                <svg class="flex-shrink-0 size-5 mt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m7 11 2-2-2-2"/><path d="M11 13h4"/><rect width="18" height="18" x="3" y="3" rx="2" ry="2"/></svg>
                                <div class="grow">
                                  <p class="font-medium text-gray-800 dark:text-neutral-200">{{__('Disponibilidad')}}</p>
                                  <p class="text-sm text-gray-500 group-hover:text-gray-800 dark:text-neutral-500 dark:group-hover:text-neutral-200">{{__('Aplicacion mobile disponible en App store y Play store')}}</p>
                                </div>
                              </a>
                            </div>
      
                            <div class="flex flex-col mx-1 md:mx-0">
                              <a class="group flex gap-x-5 text-gray-800 transition-colors duration-300 hover:bg-gray-100 rounded-lg p-4 dark:text-neutral-200 dark:hover:bg-neutral-800" href="#">
                                <svg class="flex-shrink-0 size-5 mt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/><path d="M12 17h.01"/></svg>
                                <div class="grow">
                                  <p class="font-medium text-gray-800 dark:text-neutral-200">{{__('Dudas')}}</p>
                                  <p class="text-sm text-gray-500 group-hover:text-gray-800 dark:text-neutral-500 dark:group-hover:text-neutral-200">{{__('Contacta por los medios electronicos para aclarar cualquier duda')}}</p>
                                </div>
                              </a>
      
                              <a class="group flex gap-x-5 text-gray-800 transition-colors duration-300 hover:bg-gray-100 rounded-lg p-4 dark:text-neutral-200 dark:hover:bg-neutral-800" href="#">
                                <svg class="flex-shrink-0 size-5 mt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4"/><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-4 8"/></svg>
                                <div class="grow">
                                  <p class="font-medium text-gray-800 dark:text-neutral-200">{{__('Boletos')}}</p>
                                  <p class="text-sm text-gray-500 group-hover:text-gray-800 dark:text-neutral-500 dark:group-hover:text-neutral-200">{{__('Conoce las opciones para adquirir un boleto')}}</p>
                                </div>
                              </a>
      
                              <a class="group flex gap-x-5 text-gray-800 transition-colors duration-300 hover:bg-gray-100 rounded-lg p-4 dark:text-neutral-200 dark:hover:bg-neutral-800" href="#">
                                <svg class="flex-shrink-0 size-5 mt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                                <div class="grow">
                                  <p class="font-medium text-gray-800 dark:text-neutral-200">{{__('Equipo')}}</p>
                                  <p class="text-sm text-gray-500 group-hover:text-gray-800 dark:text-neutral-500 dark:group-hover:text-neutral-200">{{__('Conose las novedades del equipo lobos plateados de Puebla')}}</p>
                                </div>
                              </a>
                            </div>
      
                            <div class="flex flex-col pt-4 md:pt-0 mx-1 md:mx-0">
                              <span class="text-sm font-semibold uppercase text-gray-800 dark:text-neutral-200">{{__('Opiniones de aficionados')}}</span>
      
                              <a class="mt-4 group flex gap-x-5 items-center" href="#">
                                <img class="size-32 rounded-lg" src="https://images.unsplash.com/photo-1648737967328-690548aec14f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=320&h=320&q=80" alt="Image Description">
                                <div class="grow">
                                  <p class="text-gray-800 dark:text-neutral-200">{{__('Conoce las opiniones de nuestros aficionados con respecto a lobos plateados de puebla.')}}</p>
                                  <p class="mt-3 inline-flex items-center gap-x-2 text-sm font-semibold text-gray-800 dark:text-neutral-200">
                                    {{__('Leer opiniones')}}
                                    <svg class="flex-shrink-0 size-4 transition ease-in-out group-hover:translate-x-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                                  </p>
                                </div>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <a href="{{route('login')}}" wire:navigate class="flex items-center gap-1 text-gray-600 hover:text-gray-400 transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-5 h-5" viewBox="0 0 24 24"><path d="M5.962 17.674C7 19.331 7 20.567 7 22h2c0-1.521 0-3.244-1.343-5.389l-1.695 1.063zM16.504 3.387C13.977 1.91 7.55.926 4.281 4.305c-3.368 3.481-2.249 9.072.001 11.392.118.122.244.229.369.333.072.061.146.116.205.184l1.494-1.33a3.918 3.918 0 0 0-.419-.391c-.072-.06-.146-.119-.214-.188-1.66-1.711-2.506-6.017.001-8.608 2.525-2.611 8.068-1.579 9.777-.581 2.691 1.569 4.097 4.308 4.109 4.333l1.789-.895c-.065-.135-1.668-3.289-4.889-5.167z"></path><path d="M9.34 12.822c-1.03-1.26-1.787-2.317-1.392-3.506.263-.785.813-1.325 1.637-1.604 1.224-.41 2.92-.16 4.04.601l1.123-1.654c-1.648-1.12-3.982-1.457-5.804-.841-1.408.476-2.435 1.495-2.892 2.866-.776 2.328.799 4.254 1.74 5.405.149.183.29.354.409.512C11 18.323 11 20.109 11 22h2c0-2.036 0-4.345-3.201-8.601a19.71 19.71 0 0 0-.459-.577zm5.791-3.344c1.835 1.764 3.034 4.447 3.889 8.701l1.961-.395c-.939-4.678-2.316-7.685-4.463-9.748l-1.387 1.442z"></path><path d="m11.556 9.169-1.115 1.66c.027.019 2.711 1.88 3.801 5.724l1.924-.545c-1.299-4.582-4.476-6.749-4.61-6.839zm3.132 9.29c.21 1.168.312 2.326.312 3.541h2c0-1.335-.112-2.608-.343-3.895l-1.969.354z"></path></svg>
                        <div class="font-medium py-3 md:py-6 dark:text-neutral-400 dark:hover:text-neutral-500">
                          {{ __('Iniciar session') }}
                        </div>
                      </a>
      
                      <div class="pt-3 md:pt-0 flex">
                        <a href="{{route('register')}}" wire:navigate>
                          <x-button class="w-32">
                            {{ __('Registrarse')}}
                          </x-button>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </nav>
          </header>
          <!-- End Header -->
</nav>
