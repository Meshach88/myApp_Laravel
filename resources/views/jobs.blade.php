<x-layout>
    <h1>Jobs Listing</h1>
    <ul>
        @foreach ($jobs as $job)
        <li>
            <a href="/jobs/{{$job['id']}}"><strong>{{$job['title']}}:</strong> pays {{$job['salary']}}
        </li></a>
        @endforeach
    </ul>
</x-layout>