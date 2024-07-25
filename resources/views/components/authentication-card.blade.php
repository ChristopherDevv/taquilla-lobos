@props(['titleCard' => __('¡Bienvenido!')])
<div>
    <!-- Hero -->
    <div class="relative overflow-hidden before:absolute before:top-0 before:start-1/2 before:bg-[url('https://preline.co/assets/svg/examples/squared-bg-element.svg')] dark:before:bg-[url('https://preline.co/assets/svg/examples-dark/squared-bg-element.svg')] before:bg-no-repeat before:bg-top before:size-full before:-z-[1] before:transform before:-translate-x-1/2">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-10">
        <!-- Announcement Banner -->
        <div class="flex justify-center">
            <a class="inline-flex items-center gap-x-2 bg-white border border-gray-200 text-xs text-gray-600 p-2 px-3 rounded-full transition hover:border-gray-300 dark:bg-neutral-800 dark:border-neutral-700 dark:hover:border-neutral-600 dark:text-neutral-400" href="#">
                {{ __('¡Disfruta las nuevas funciones!') }}
            <span class="flex items-center gap-x-1">
                <span class="border-s border-gray-200 text-gray-600 ps-2">{{__('Explorar')}}</span><span class="inline text-violet-600 dark:text-violet-500">— {{__('Nuevo')}}</span>

            </span>
            </a>
        </div>
        <!-- End Announcement Banner -->
    
        <!-- Title -->
        <div class="mt-5 max-w-xl text-center mx-auto">
            <h1 class="block font-bold text-gray-600 text-2xl md:text-5xl lg:text-4xl dark:text-neutral-200">
                <span>{{ $titleCard }}</span>
            </h1>
        </div>
        <!-- End Title -->
    
        <div class="mt-5 max-w-3xl text-center mx-auto">
            <p class="text-lg text-gray-600 dark:text-neutral-400">{{__('Ingrese sus credenciales.')}}</p>
        </div>
    
            <div class="w-full sm:max-w-lg mx-auto bg-transparent mt-6 px-6 py-4 overflow-hidden sm:rounded-2xl flex flex-col items-center justify-center">
                {{ $slot }}
            </div>
        <!-- End Buttons -->
        </div>
    </div>
    <!-- End Hero -->
</div>
