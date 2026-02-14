@props(['toys'])

<div>
    <p class="mb-3 text-body overflow-x-auto">Total: {{ $toys->count() }}</p>
    <table class="min-w-full table-auto bg-white border-2 border-[#89b3d6]">
        <thead class="block md:table-header-group">
            <tr class="border-b bg-[#89b3d6] block md:table-row">
                <th class="px-6 py-4 text-left text-white font-medium block md:table-cell">Name</th>
                <th class="px-6 py-4 text-left text-white font-medium block md:table-cell">Supervisor</th>
                <th class="px-6 py-4 text-left text-white font-medium block md:table-cell">Subject</th>
                <th class="px-6 py-4 text-left text-white font-medium block md:table-cell">Creation Date</th>
                <th class="px-6 py-4 text-left text-white font-medium block md:table-cell">Species</th>
            </tr>
        </thead>
        <tbody class="bg-[#dcecfa] block md:table-row-group">
            @forelse($toys as $toy)
                <tr class="border-2 border-[#89b3d6] block md:table-row">
                    <td class="px-6 py-4 flex items-center gap-4 block md:table-cell">
                        <img src="{{ $toy->visual }}" alt="Visual data" class="w-16 h-16 object-contain">
                        @if ($toy->gender === 'Male')
                            <span
                                class="rounded-full text-blue-600 border border-blue-600 bg-blue-800/20 py-1 px-0.5 text-sm transition-all shadow-sm w-[35%] text-center ">
                                <svg width="20" height="20" viewBox="0 0 26 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="size-6 inline">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.1888 7L12.1909 5L19.1909 5.00746L19.1834 12.0075L17.1834 12.0053L17.1873 8.41678L14.143 11.4611C15.4612 13.4063 15.2587 16.0743 13.5355 17.7975C11.5829 19.7501 8.41709 19.7501 6.46447 17.7975C4.51184 15.8449 4.51184 12.6791 6.46447 10.7264C8.16216 9.02873 10.777 8.80709 12.7141 10.0615L15.7718 7.00382L12.1888 7ZM7.87868 12.1406C9.05025 10.9691 10.9497 10.9691 12.1213 12.1406C13.2929 13.3122 13.2929 15.2117 12.1213 16.3833C10.9497 17.5549 9.05025 17.5549 7.87868 16.3833C6.70711 15.2117 6.70711 13.3122 7.87868 12.1406Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                        @else
                            <span
                                class="rounded-full text-pink-600 border border-pink-600 bg-pink-800/20 py-1 px-0.5 text-sm transition-all shadow-sm w-[35%] text-center">
                                <svg width="20" height="20" viewBox="0 0 26 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class="size-6 inline">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12 3C9.23858 3 7 5.23858 7 8C7 10.419 8.71776 12.4367 11 12.9V15H8V17H11V21H13V17H16V15H13V12.9C15.2822 12.4367 17 10.419 17 8C17 5.23858 14.7614 3 12 3ZM9 8C9 9.65685 10.3431 11 12 11C13.6569 11 15 9.65685 15 8C15 6.34315 13.6569 5 12 5C10.3431 5 9 6.34315 9 8Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                        @endif
                        <div>
                            <p class="text-gray-800 font-medium font-semibold mb-2"> {{ $toy->name }} · <span
                                    class="text-gray-600">{{ $toy->alias }}</span></p>
                        </div>
                    </td>
                    <td class="px-6 py-4 block md:table-cell">
                        {{ $toy->user_id ? \App\Models\User::find($toy->user_id)->name : 'N/A' }}</td>
                    <td class="px-6 py-4 block md:table-cell">{{ $toy->subject }}</td>
                    <td class="px-6 py-4 block md:table-cell">{{ $toy->creation_date }}</td>
                    <td class="px-6 py-4 block md:table-cell">{{ $toy->species }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="py-4 text-center text-gray-500">No Toys incepted recently</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
