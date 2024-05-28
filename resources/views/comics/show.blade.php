@extends('layouts.app')


@section('content')
<section class="container">
    <h1 class="text-center">
        {{ $comics->title }}
    </h1>
    <div class="row">
        <div class="col-12 col-md-4">
            <img src="{{ $comics->thumb }}" class="img-fluid" alt="{{ $comics->title }}">
        </div>
        <div class="col-12 col-md-8">
            <p>
                {!!$comics->description!!}
            </p>
            <div>
                Type: {{ $comics->type }}
            </div>
            <div>
                Price: {{ $comics->price }}
            </div>
            <div>
                Series: {{ $comics->series }}
            </div>
            <div>
                Sale Date: {{ $comics->sale_date }}
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