<x-layout>
<div class="container-fluid">
<div class="row justify-content-center">
<h2 class="text-white display-4 text-center text-color py-5">
    Explora per genre cinematografico
</h2>
@foreach ($genres as $genre)
<div class="col-12 col-md-3 d-flex justify-content-center">
<a href="{{ route('genre.show', compact('genre')) }}" class="h-100 w-100">
    <div class="box mx-auto d-fex justify-content-centeralign-items-center">
<h3 class="text-white text-color text-capitalize">{{ $genre->name }}</h3>
    </div>
</a>
</div>
@endforeach
</div>
</div>
</x-layout>
