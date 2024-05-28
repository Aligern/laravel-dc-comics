@extends('layouts.app')

@section('title', 'Comics')

@section('content')
<div id="main">
    <div id="jumbotron">
    </div>
    <div class="container pb-3">
        <div id="mainTitle">
            <h5>
                Current Series
            </h5>
        </div>
        <div>
            <form action="{{route('comics.store')}}" method="GET">
                <div class="mb-3 form-check w-25" >
                   <select name="search" id="search">
                    <option value="#" selected>
                        Choose the type of comic
                    </option>
                    <option value="comic book">
                        comic book
                    </option>
                    <option value="graphic novel">
                        graphic novel
                    </option>
                   </select>
                 </div>
                <button type="submit" class="btn btn-success ms-3">
                    Search
                </button>
            </form>
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
                            <div class="buy mt-3">
                                <a class="text-light text-decoration-none" href="{{route('comics.show', $comic->id)}}">
                                    Details
                                </a>
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
            <button id="comicButton">
                Load More
            </button>
        </div>
    </div>
</div>
@endsection