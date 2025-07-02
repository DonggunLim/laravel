<x-layout>
    <x-slot:heading>
        jobs heading
    </x-slot:heading>
    <div class="space-y-4">
        @foreach ($jobs as $job)
            <div class="font-bold text-blue-400">
                {{ $job->employer->name }}
            </div>
            <a href="/jobs/{{ $job['id'] }}"
                class="block rounded-lg border border-gray-200 px-4 py-6">{{ $job['title'] }},
                PAY:
                <strong>
                    {{ $job['salary'] }}
                </strong></a>
        @endforeach
        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
