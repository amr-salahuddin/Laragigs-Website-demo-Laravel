<x-layout>

@include('partials._hero')
    @include('partials._search')
    <div
        class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
    >
        @if (count($listings)==0)
            <p>No listings found.</p>
        @endif
        @foreach ($listings as $list)
            <x-listing-card :list="$list"/>
        @endforeach
    </div>
    <mt-6 class="p-4">
        {{$listings->links()}}
    </mt-6>
</x-layout>
