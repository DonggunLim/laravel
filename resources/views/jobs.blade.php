<x-layout>
    <x-slot:heading>
        jobs heading
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <li class="text-blue-400">
                <a href="/jobs/{{ $job['id'] }}">{{ $job['title'] }}, PAY:<strong>{{ $job['salary'] }}</strong></a>
            </li>
        @endforeach
    </ul>
</x-layout>
