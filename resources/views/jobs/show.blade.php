<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h2 class="font-bold text-lg">
{{--        {{$job['title']}}--}}
        {{$job->title}}
    </h2>
    <p>
{{--        this job pays {{ $job['salary'] }} per year.--}}
        this job pays {{ $job->salary }} per year.
    </p>

{{-- ==>>You can access id as property because of using Eloquent--}}
    @can('edit', $job)
        <p class="mt-6">
            <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>

        </p>
    @endcan
</x-layout>

