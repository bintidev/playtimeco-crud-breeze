<x-app-layout>


    <div class="flex justify-center align-center mt-8">
        <div>
            <div class="mb-6">
                <a href="{{ route('toys.index') }}"
                    class="inline-flex items-center px-4 py-2 text-[#484740] bg-[#6098C7] border border-[3.5px] border-[#484740] shadow-[0_5px_0_rgb(72_71_64)] hover:bg-[#69C9DD] border transition duration-300 ease-in-out hover:translate-y-2 hover:shadow-[0_0_0_rgb(72_71_64)]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                    </svg> &nbsp;

                    Back to control panel
                </a>
            </div>

            <div>
                <div class="relative flex flex-col my-6 border-2 border-[#FFB544] shadow-[10px_10px_0_rgb(255_181_68/0.43)] bg-[#FFF7EC] w-96 p-4 pb-6">
                    <!--<div class="relative h-56 m-2.5 overflow-hidden text-white rounded-md">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1471&amp;q=80" alt="card-image" />
                    </div>-->
                    <div class="p-4">
                    @if ($display->gender == 'Male')
                        <span class="mb-2 rounded-full text-blue-600 border border-blue-600 bg-blue-800/20 py-1 px-2.5 text-base transition-all shadow-sm w-[35%] text-center">
                            <svg width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    fill-rule="evenodd"
                                    clip-rule="evenodd"
                                    d="M12.1888 7L12.1909 5L19.1909 5.00746L19.1834 12.0075L17.1834 12.0053L17.1873 8.41678L14.143 11.4611C15.4612 13.4063 15.2587 16.0743 13.5355 17.7975C11.5829 19.7501 8.41709 19.7501 6.46447 17.7975C4.51184 15.8449 4.51184 12.6791 6.46447 10.7264C8.16216 9.02873 10.777 8.80709 12.7141 10.0615L15.7718 7.00382L12.1888 7ZM7.87868 12.1406C9.05025 10.9691 10.9497 10.9691 12.1213 12.1406C13.2929 13.3122 13.2929 15.2117 12.1213 16.3833C10.9497 17.5549 9.05025 17.5549 7.87868 16.3833C6.70711 15.2117 6.70711 13.3122 7.87868 12.1406Z"
                                    fill="currentColor"/>
                            </svg>
                        </span>
                    @else
                        <span class="mb-2 rounded-full text-pink-600 border border-pink-600 bg-pink-800/20 py-1 px-2.5 text-base transition-all shadow-sm w-[35%] text-center">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                                <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M12 3C9.23858 3 7 5.23858 7 8C7 10.419 8.71776 12.4367 11 12.9V15H8V17H11V21H13V17H16V15H13V12.9C15.2822 12.4367 17 10.419 17 8C17 5.23858 14.7614 3 12 3ZM9 8C9 9.65685 10.3431 11 12 11C13.6569 11 15 9.65685 15 8C15 6.34315 13.6569 5 12 5C10.3431 5 9 6.34315 9 8Z"
                                fill="currentColor"/>
                            </svg>
                        </span>
                    @endif
                    @if ($display->status === 'Deceased')
                        <span class="mb-2 rounded-full text-red-600 border border-red-600 bg-red-800/20 py-1 px-2.5 text-base transition-all shadow-sm w-[35%] text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-[15.5px] inline">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg> &nbsp;
                            
                            Deceased
                        </span>
                    @else
                        <span class="mb-4 rounded-full text-green-600 border border-green-600 bg-green-800/20 py-1 px-2.5 text-xs transition-all shadow-sm  w-[35%] text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-[15.5px] inline">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                            </svg> &nbsp;

                            Alive
                        </span>
                    @endif
                    </div>
                    <div>
                        <h6 class="mb-2 text-slate-800 text-xl font-semibold">
                        {{ $display->name }} · <span class="text-slate-300">{{ $display->alias }}</span>
                        </h6>
                        <p class="text-slate-600 leading-normal font-light">
                            {{ $display->description ? $display->description : ''  }}
                        </p>
                        <br>
                        <div class="flex flex-row text-sm gap-[35%]">
                            <div class="flex flex-col text-sm">
                                <span class="text-slate-800 font-semibold">{{ $display->supervisor ? $display->supervisor : 'N/A' }}</span>
                                <span class="text-slate-600">
                                    {{ $display->creation_date }}
                                </span>
                            </div>

                            <div>
                                <a href="{{ route('toys.edit', $display->id) }}" class="inline-flex items-center">
                                    <button class="px-2 py-2 text-[#484740] bg-[#ffb544] border border-[3.5px] border-[#484740] shadow-[0_5px_0_rgb(72_71_64)] hover:bg-[#ffcf85] border transition duration-300 ease-in-out hover:translate-y-2 hover:shadow-[0_0_0_rgb(72_71_64)]">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                        </svg>
                                    </button>
                                </a>
                                <x-danger-button x-data=""
                                        x-on:click.prevent="$dispatch('open-modal', 'confirm-toy-failure')">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                </x-danger-button>
                                <x-modal name="confirm-toy-failure" focusable>
                                    <form action="{{ route('toys.destroy', $display->id) }}" style="display:inline;"
                                        class="p-8">
                                        @csrf
                                        @method('DELETE')

                                        <h2 class="text-lg font-medium text-gray-500">
                                            {{ __('Are you sure you want to fail this toy?') }}
                                        </h2>

                                        <p class="mt-1 text-sm text-[#FFF7EC]">
                                            {{ __('Keep in mind that this action cannot be undone. If you accidentally misuse a toy, there will be consequences.') }}
                                        </p>

                                        <div class="mt-6 flex justify-end">
                                            <x-secondary-button x-on:click="$dispatch('close')">
                                                {{ __('Cancel') }}
                                            </x-secondary-button>

                                            <x-danger-button class="ms-3">
                                                {{ __('Fail Toy') }}
                                            </x-danger-button>
                                        </div>
                                    </form>
                                </x-modal>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
