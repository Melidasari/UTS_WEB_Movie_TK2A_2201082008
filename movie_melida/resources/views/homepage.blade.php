@extends('layout.template')

@section('title', 'Homepage')

@section('content')
<div class="container">
    <h1 class="text-center">Popular Movies</h1>
    <div class="row">
        @foreach ($movies as $movie)
        <div class="col-lg-3 mb-4">
            <div class="card movie-card">
                <img src="/images/{{ $movie['foto_sampul'] }}" class="card-img-top" alt="{{ $movie['judul'] }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie['judul'] }}</h5>
                    <p class="card-text">{{ $movie['sinopsis'] }}</p>
                </div>
                <div class="card-footer text-center">
                    <a href="/movie/{{ $movie['id'] }}" class="btn btn-success btn-sm">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
