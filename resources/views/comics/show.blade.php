@extends('layouts.app')

@section('title', $comic->title)

@section('content')
<section class="container text-white">
    <h1 class="text-center">
        {{ $comic->title }}
    </h1>
    <div class="row">
        <div class="col-12 col-md-4 mb-3">
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
                <a class="text-decoration-none text-light" href="{{route('comics.index')}}">
                    Back to comics
                </a>
                <form action="{{route('comics.destroy', $comic->id)}}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        Delete
                    </button>
                </form>
            </button>
        </div>
    </div>

</section>


@endsection