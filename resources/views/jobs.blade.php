<x-layout>
    <x-slot:heading>
        Jobs page
    </x-slot:heading>

    <h1>Hello from the Jobs page.</h1>
    <ul>
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}">
                <li><strong>{{ $job['job'] }}:</strong> pays a {{ $job['salary'] }} per year salary.</li>
            </a>
        @endforeach
    </ul>
</x-layout>