<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Toy Control & Monitoring') }}
        </h2>
    </x-slot>

    <div class="container">
        <h1>Toy Control & Monitoring</h1>
        <a href="{{ route('toys.create') }}" class="btn btn-primary mb-3">Initiate new Toy</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Supervisor</th>
                    <th>Alias</th>
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Status</th>
                    <th>Creation Date</th>
                    <th>Species</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($toys as $toy)
                    <tr>
                        <td>{{ $toy->supervisor }}</td>
                        <td>{{ $toy->alias }}</td>
                        <td>{{ $toy->name }}</td>
                        <td>{{ $toy->subject }}</td>
                        <td>{{ $toy->status }}</td>
                        <td>{{ $toy->creation_date }}</td>
                        <td>{{ $toy->species }}</td>
                        <td>
                            <a href="{{ route('toys.edit', $toy->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('toys.destroy', $toy->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
