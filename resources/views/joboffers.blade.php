<x-layout>

    @include('_joboffers-header')

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            @if ($joboffers->count())

                <x-joboffer-featured :joboffer="$joboffers[0]" />

                @if ($joboffers->count()>1)
                    <div class="lg:grid lg:grid-cols-2">

                        @foreach($joboffers->skip(1) as $joboffer)
                                <x-joboffer-card :joboffer="$joboffer"/>
                        @endforeach
                    </div>
                @endif
            @else
                <p class="text-center">No joboffers yet. Please check back later</p>
            @endif


        </main>

</x-layout>

    

