<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h2>{{ $job['title'] }}</h2>
    <p>
        Job pay : {{ $job['salary'] }}
    </p>
</x-layout>
