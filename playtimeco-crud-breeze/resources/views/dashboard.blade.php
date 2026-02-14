<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-white leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-8">
            <div class="bg-[#484740] overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-2xl font-semibold text-white mb-2 font-[Signika]">Welcome to PlaytimeCo Dashboard
                    </h3>
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>

        <div class="flex justify-center align-center">
            <div class="grid sm:grid-cols-1 lg:grid-cols-2 gap-8 px-4 max-w-7xl mx-auto w-full">
                <div
                    class="col-span-2 px-8 py-6 border-2 border-[#FFB544] shadow-[10px_10px_0_rgb(255_181_68/0.43)] bg-[#FFF7EC]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#FF4366" class="size-10">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                    </svg>

                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-heading font-[Signika]">Statistics</h5>
                    <p class="mb-3 text-body"></p>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                        <div class="border-2 border-[#FF6E7F] bg-[#ffc4cb]/50 block p-6 border">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-heading font-[Signika]">Incepted
                                Toys so far
                            </h5>

                            <p class="mb-3 text-body">
                                {{ \App\Models\Toy::count() }}
                            </p>
                        </div>
                        <div class="border-2 border-[#FF6E7F] bg-[#ffc4cb]/50 block p-6 border">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-heading font-[Signika]">Toys
                                pending to fail
                            </h5>

                            <p class="mb-3 text-body">
                                {{ \App\Models\Toy::where('status', 'Deceased')->count() }}
                            </p>
                        </div>
                        <div
                            class="border-2 border-[#FF6E7F] bg-[#ffc4cb]/50 col-span-1 lg:col-span-2 block  p-6 border">
                            <h5 class="mb-2 text-2xl font-semibold tracking-tight text-heading font-[Signika]">Incepted
                                Toys in the
                                last
                                week
                            </h5>

                            <x-weekly-toys :toys="\App\Models\Toy::whereBetween('created_at', [
                                now()->startOfWeek(),
                                now()->endOfWeek(),
                            ])->get()" />
                        </div>
                    </div>
                </div>
                <div
                    class="border-2 border-[#FFB544] shadow-[10px_10px_0_rgb(255_181_68/0.43)] p-6 border bg-[#FFF7EC]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#FF4366" class="size-10">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                    </svg>

                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-heading font-[Signika]">Monitor Toys</h5>

                    <p class="mb-3 text-body">Toys incepted, monitored and in transition documented to date</p>
                    <a href="{{ route('toys.index') }}"
                        class="inline-flex items-center px-4 py-2 text-[#484740] bg-[#6098C7] border border-[3.5px] border-[#484740] shadow-[0_5px_0_rgb(72_71_64)] hover:bg-[#69C9DD] border transition duration-300 ease-in-out hover:translate-y-2 hover:shadow-[0_0_0_rgb(72_71_64)]">
                        Monitor
                    </a>
                </div>
                <div
                    class="border-2 border-[#FFB544] shadow-[10px_10px_0_rgb(255_181_68/0.43)] p-6 border bg-[#FFF7EC]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="#FF4366" class="size-10">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9.75 3.104v5.714a2.25 2.25 0 0 1-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 0 1 4.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0 1 12 15a9.065 9.065 0 0 0-6.23-.693L5 14.5m14.8.8 1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0 1 12 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                    </svg>


                    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-heading font-[Signika]">Incept Toy</h5>

                    <p class="mb-3 text-body">Begin tracking a new toy progress under supervision</p>
                    <a href="{{ route('toys.create') }}"
                        class="inline-flex items-center px-4 py-2 text-[#484740] bg-[#6098C7] border border-[3.5px] border-[#484740] shadow-[0_5px_0_rgb(72_71_64)] hover:bg-[#69C9DD] border transition duration-300 ease-in-out hover:translate-y-2 hover:shadow-[0_0_0_rgb(72_71_64)]">
                        Incept
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
