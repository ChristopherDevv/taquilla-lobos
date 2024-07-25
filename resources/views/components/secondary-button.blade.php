<div {{ $attributes->merge(['class' => 'flex items-center justify-center relative']) }}>
    <button class="h-10 flex items-center justify-center w-full relative z-5">
        <div {{ $attributes->merge(['type' => 'submit', 'class' => 'cursor-pointer transition-all bg-tw-bg-secondary-500 text-white font-semibold px-6 py-2 rounded-full
                border-tw-border-secondary-600 border-b-[4px] hover:brightness-110 hover:-translate-y-[1px] hover:border-b-[6px] active:border-b-[2px] 
                active:brightness-90 active:translate-y-[2px]']) }}>
        {{ $slot }}
        </div>  
    </button>
</div>