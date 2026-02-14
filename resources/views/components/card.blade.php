<div class="card mb-3" style="width: 18rem;">
    <img src="{{Storage::url($movie->img) }}" class="card-img-top cardImg img-fluid" alt="poster di {{$movie->title}}">
    <div class="card-body">
        <h5 class="card-title">Titolo: {{$movie->title }}</h5>
        <h5 class="card-title muted">Register: {{$movie->director}}</h5>
        <p class="card-text">Anno: {{$movie->year}}</p>
        <p>Creato da: {{ $movie->user->name }}</p>
        <a href="{{ route('movie.show', compact('movie')) }}" class="btn btn-primary">leggi di
            più</a>
            @auth
            @if ($movie->user_id == Auth::id())
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <a href="{{ route('movie.edit', compact('movie')) }}" class="btn btn-primary">modifica il film</a>
           @endif
         @endauth
    </div>
</div>