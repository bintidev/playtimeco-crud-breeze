<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
        <a href="{{ route('toys.index') }}"
            class="inline-block px-5 py-1.5 font-[Nata_Sans] text-[#0F0F0F] bg-[#F0DC06] border border-transparent transition duration-300 ease-in-out hover:scale-110 hover:shadow-[0_0_25px_rgb(255_252_82)] rounded-lg text-base leading-normal">
            Index
        </a>
    </div>
</x-app-layout>
