<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-[#FFF7EC]">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-[#FFF7EC] border-2 border-[#FFB544] shadow-[10px_10px_0_rgb(255_181_68/0.43)]">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-[#FFF7EC] border-2 border-[#FFB544] shadow-[10px_10px_0_rgb(255_181_68/0.43)]">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-[#FFF7EC] border-2 border-[#FFB544] shadow-[10px_10px_0_rgb(255_181_68/0.43)]">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
