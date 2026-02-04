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
    </div>

    @extends('layouts.app')

    @section('content')
        <div class="container">
            <h1>Toy Control & Monitoring</h1>
            <a href="{{ route('toys.create') }}" class="btn btn-primary mb-3">Initiate new Toy</a>

            @if ($toys->count())
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
                                    <form action="{{ route('toys.destroy', $toy->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>No tasks available.</p>
            @endif
        </div>
    @endsection
</x-app-layout>
