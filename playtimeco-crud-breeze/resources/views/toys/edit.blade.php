<x-guest-layout>

    <form method="POST" action="{{ route('toys.update', $toy) }}" class="font-[Fredoka] px-6">
        @csrf
        @include ('toys.forms')

        <div class="flex items-center justify-end mt-4">
            <a href="{{ route('toys.index') }}"
                class="inline-flex items-center px-4 py-2 text-[#484740] bg-[#FF6E7F] border border-[3.5px] border-[#484740] shadow-[0_5px_0_rgb(72_71_64)] hover:bg-[#FF9EAA] border transition duration-300 ease-in-out hover:translate-y-2 hover:shadow-[0_0_0_rgb(72_71_64)]">
                {{ __('Cancel') }}
            </a>

            <x-primary-button class="ms-3">
                {{ __('Report') }}
            </x-primary-button>
        </div>
    </form>

</x-guest-layout>
