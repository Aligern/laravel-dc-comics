@extends('layouts.app')

@section('title', $comic->title)

@section('content')
<section class="container">
    <h1 class="text-center">
        {{ $comic->title }}
    </h1>
    <div class="row">
        <div class="col-12 col-md-4">
            <img src="{{ $comic->thumb }}" class="img-fluid" alt="{{ $comic->title }}">
        </div>
        <div class="col-12 col-md-8">
            <p>
                {!!$comic->description!!}
            </p>
            <div>
                Type: {{ $comic->type }}
            </div>
            <div>
                Price: {{ $comic->price }}
            </div>
            <div>
                Series: {{ $comic->series }}
            </div>
            <div>
                Sale Date: {{ $comic->sale_date }}
            </div>
            <button>
                <a href="{{route('comics.index')}}">
                    Back to comics
                </a>
            </button>
        </div>
    </div>

</section>


@endsection