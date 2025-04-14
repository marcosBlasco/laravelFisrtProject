<x-layout>
    <x-slot:heading>
    
        <div class="sm:flex sm:justify-between">
            <p>Jobs page</p>
            <x-button href="/jobs/create">Create Job</x-button>    
        </div>
    </x-slot:heading>

    <h1>Hello from the Jobs page.</h1>
    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 px-6 border border-gray-200 rounded-lg">
                <div class="font-bold text-blue-500 text-sm">{{ $job->employer->name }}</div>
                <div>
                    <strong>{{ $job['title'] }}:</strong> pays a ${{ $job['salary'] }} per year salary.
                </div>
            </a>
        @endforeach
        <div>{{ $jobs -> links() }}</div>
    </div>
</x-layout>