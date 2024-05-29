@extends('layouts.app')

@section('content')
<div id="main">
        <div id="jumbotron">
        </div>
        <div class="container">
            <div id="mainTitle" class="d-none">
                <h5>Current Series</h5>
            </div>
            <div class="container text-center">
                <h1 class="text-white">It seems pretty empty here..</h1>
                    <img src="/img/SadJoker.jpg" alt="SadJoker">
            </div>
            <div id="button" class="d-flex justify-content-center">
                <button id="loadMore">
                    <a href="{{route('comics.create')}}">Add Your Comics!</a>
                </button>
            </div>
        </div>
    </div>
@endsection