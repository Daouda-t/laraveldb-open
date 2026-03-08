<div class="row my-5">
    <input wire:model.live="search" type="text" placeholder="cerca tra i post..." class="mb-5">
    @if (session()->has('alert'))
     <div class="alert alert-wirning">
       {{ session('alert') }}
     </div>
    @endif
    @foreach ($posts as $post)
    <div class="col-12 col-md-4 mb-5">
     <div class="card mx-auto" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <div class="row justify-content-center align-items-center">
                <p>{{ $post->content }}</p>
            </div>
            
        </div>
     </div>
    </div>
    @endforeach
</div>
