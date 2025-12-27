<x-layoute>
    <div class="container-fluid movies">
        <div class="row h-100 justify-content-center pt-5">
            <div class="row pt-5">
                <h2 class="display-5 text-white text-center text-color">tutti i nostri film</h2>
            </div>
            @foreach ($movies as $movie)
                <div class="col-12 col-md-3 d-flex justify-content-center">
                    <x-card :movie="$movie" title="{{ $movie['title'] }}" />
                </div>
            @endforeach
        </div>
    </div>

</x-layoute>