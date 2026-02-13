@props(['toys'])

<div>
    <p class="mb-3 text-body">Total: {{ $toys->count() }}</p>

    <table class="w-full">
        <thead>
            <tr class="border-b">
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
                    Creation Date
                </th>
                <th scope="col" class="px-6 py-3 font-medium">
                    Species
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse($toys as $toy)
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
                        {{ $toy->creation_date }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $toy->species }}
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="py-4 text-center text-gray-500">No Toys incepted recently</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
