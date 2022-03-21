<x-vonPollLayout>
    <div class="my-16">
        <h1 class="text-3xl text-center">Real Estate Offers</h1>
        <ul class="list">
        @foreach($estates as $estate)
            <li>
                <a class="accent-red-600" href="/von-poll/estates/{{$estate->slug}}">
                {{$estate->slug}}
                </a>
            </li>
        @endforeach
        </ul>
    </div>
</x-vonPollLayout>
