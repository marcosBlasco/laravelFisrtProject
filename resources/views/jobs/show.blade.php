<x-layout>
    <x-slot:heading>
        Job page
    </x-slot:heading>

    <h1 class="font-bold text-lg">Hello from the {{ $job -> title }} page.</h1>
    <p>This kind of Job pays {{ $job -> salary }} as salary per year.</p>
   
    <p class="mt-6">
        <x-button href="/jobs/{{ $job -> id }}/edit">Edit Job</x-button>
    </p>

</x-layout>