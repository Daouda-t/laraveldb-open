<div class="card mb-3" style="width: 18rem;">
    <img src="https://picsum.photos/seed/picsum/200/300" class="card-img-top cardImg img-fluid" alt="poster di "
        {{$title}}"">
    <div class="card-body">
        <h5 class="card-title">{{$title }}</h5>
        <h5 class="card-title muted">{{ $movie['director'] }}</h5>
        <p class="card-text">{{ $movie['genres'] }}</p>
        <a href="#" class="btn btn-primary">leggi di
            più</a>
    </div>
</div>