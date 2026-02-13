<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-white leading-tight">
            {{ __('Toy Control & Monitoring') }}
        </h2>
    </x-slot>

    <div class="flex justify-center align-center mt-8">
        <div>
            <div class="mb-6">
                <a href="{{ route('toys.create') }}"
                    class="inline-flex items-center px-4 py-2 text-[#484740] bg-[#6098C7] border border-[3.5px] border-[#484740] shadow-[0_5px_0_rgb(72_71_64)] hover:bg-[#69C9DD] border transition duration-300 ease-in-out hover:translate-y-2 hover:shadow-[0_0_0_rgb(72_71_64)]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg> &nbsp;

                    Initiate New Toy</a>
            </div>

            <div>
                <table
                    class="w-full text-lg text-left rtl:text-right text-body bg-[#FFF7EC] border-4 border-[#FFB544] shadow-[10px_10px_0_rgb(255_181_68/0.43)]">
                    <thead class="text-xl text-body bg-neutral-secondary-soft border-b rounded-base border-default">
                        <tr>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Supervisor
                            </th>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Alias
                            </th>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Subject
                            </th>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Creation Date
                            </th>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Species
                            </th>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($toys as $toy)
                            <tr class="bg-neutral-primary border-b border-default">
                                <th scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                                    {{ dd($toy->supervisor) }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $toy->alias }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $toy->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $toy->subject }}
                                </td>
                                <td class="px-6 py-4">
                                    @if ($toy->status === 'Deceased')
                                        <span
                                            class="px-3 py-1 text-md font-semibold text-red-500 border border-red-500 bg-red/50 rounded-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                                            </svg> &nbsp;

                                            Deceased
                                        </span>
                                    @else
                                        <span
                                            class="px-3 py-1 text-md font-semibold text-green-500 border border-green-500 bg-green/50 rounded-full">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="oklch(72.3% 0.219 149.579)" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                            </svg> &nbsp;

                                            Alive
                                        </span>
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    {{ $toy->creation_date }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $toy->species }}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('toys.edit', $toy->id) }}"
                                        class="inline-flex items-center px-2 py-2 text-[#484740] bg-[#FF6E7F] border border-[3.5px] border-[#484740] shadow-[0_5px_0_rgb(72_71_64)] hover:bg-[#FF9EAA] border transition duration-300 ease-in-out hover:translate-y-2 hover:shadow-[0_0_0_rgb(72_71_64)]">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125" />
                                        </svg>
                                    </a>
                                    <x-danger-button x-data=""
                                        x-on:click.prevent="$dispatch('open-modal', 'confirm-toy-failure')"><svg
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="size-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                    </x-danger-button>
                                    <x-modal name="confirm-toy-failure" focusable>
                                        <form action="{{ route('toys.destroy', $toy->id) }}" style="display:inline;"
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
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
