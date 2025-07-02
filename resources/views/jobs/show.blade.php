<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h2>{{ $job['title'] }}</h2>
    <p>
        Job pay : {{ $job['salary'] }}
    </p>
    <p class="my-6">
        <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
    </p>
</x-layout>
