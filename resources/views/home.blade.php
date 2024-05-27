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
            <div id="cards" class="row m-auto text-light" >
                <div id="cardCol" class="col-12 col-md-3 col-lg-2" v-for="(item, index) in comics" :key="index">
                    <CardComponent :image="item.thumb" :type="item.type" :title="item.series" :price="item.price" />
                </div>
            </div>
            <div id="button" class="d-flex justify-content-center">
                <button id="loadMore">
                    Load More
                </button>
            </div>
        </div>
    </div>
@endsection