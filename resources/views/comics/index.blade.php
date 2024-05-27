@extends('layouts.app')

@section('content')
<div id="main">
    <div id="jumbotron">
    </div>
    <div class="container">
        <div id="mainTitle">
            <h5>
                Current Series
            </h5>
        </div>
        <div id="cards" class="row m-auto text-light">
            @foreach ($comics as $comic)
            <div id="cardCol" class="col-12 col-md-3 col-lg-2">
                        <div id="card">
                            <img src="{{ $comic->thumb }}" class="w-100 img-fluid " alt="{{ $comic->title }}">
                            <div class="ls-hover">
                                <div class="buy">
                                    Acquista
                                </div>
                            </div>
                        </div>
                        <div id="ComicTitle">
                            <h6>
                                {{ $comic->title }}
                            </h6>
                            <span>
                                {{ $comic->price }}
                            </span>
                        </div>
                </div>
                    @endforeach
        </div>
        <div id="button" class="d-flex justify-content-center">
            <button>
                Load More
            </button>
        </div>
    </div>
</div>

@endsection