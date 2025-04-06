<x-layout>
    <x-slot:heading>
        Job page
    </x-slot:heading>

    <h1 class="font-bold text-lg">Hello from the {{ $job['title'] }} page.</h1>
    <p>This kind of Job pays {{ $job["salary"] }} as salary per year.</p>
   
</x-layout>