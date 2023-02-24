@extends('layouts.main')

@section('main-content')
    <section>
        <h1 class="text-center my-4">Movies</h1>
        <div class="container my-4 d-flex justify-content-center flex-wrap ">
            @isset($movies)
                @forelse ($movies as $movie)
                    <div class="card m-2" style="width: 18rem;">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $movie->original_title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $movie->title }}</h6>
                            <p class="card-text">Nationality: {{ $movie->nationality }}</p>
                            <p class="card-text"> Publication date: {{ $movie->date }}</p>
                            <p class="card-text"> Vote: {{ $movie->vote }}/10</p>

                        </div>
                    </div>
                @empty
                    <h3>No films</h3>
                @endforelse
            @endisset


        </div>

    </section>
@endsection
