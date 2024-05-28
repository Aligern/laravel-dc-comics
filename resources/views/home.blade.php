@extends('layouts.app')

@section('content')
<div id="main">
        <div id="jumbotron">
        </div>
        <div class="container">
            <div id="mainTitle" class="d-none">
                <h5>
               Current Series
                </h5>
            </div>
            <div id="cards" class="row m-auto text-light" >
                <div id="cardCol" class="col-12 col-md-3 col-lg-2">
                </div>
            </div>
            <div id="button" class="d-flex justify-content-center">
                <button id="loadMore">
                    <a href="{{route('comics.index')}}">
                    Go to Comics
                    </a>
                </button>
            </div>
        </div>
    </div>
@endsection