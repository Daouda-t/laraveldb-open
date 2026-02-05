<x-layout>
    <div class="container-fluid movies">
        <div class="row h-100 justify-content-center pt-5">
            <div class="row pt-5">
                <h2 class="display-4 text-white text-center text-color">tutti i nostri film</h2>
            </div>
            @forelse ($movies as $movie)
                <div class="col-12 col-md-4">
                    <x-card :movie="$movie" />
                </div>
            @empty
                <div class="col-12 d-flex justify-content-center">
                    <h2 class="text-white text-center text-color">non ci sono film disponibili</h2>
                </div>
            @endforelse
        </div>
    </div>

</x-layout>