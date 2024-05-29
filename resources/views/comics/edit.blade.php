@extends('layouts.app')

@section('content')
    <section class="container text-light">
        <form action="{{route('comics.update', $comic->id)}}" method="POST">
            @csrf
            @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input value="{{$comic->title}}" type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title">
                    <div id="titleHelp" class="form-text text-white" required>Add the comic title here</div>
                </div>

                <div class="mb-3">
                  <label for="description" class="form-label">Description</label>
                  <textarea value="{{$comic->description}}" class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                  <div id="descriptionHelp" class="form-text text-white">Add the description</div>
                </div>

                <div class="mb-3 form-check">
                   <label for="thumb" class="form-label">Thumb</label>
                  <input value="{{$comic->thumb}}" type="text" class="form-control" id="thumb" aria-describedby="thumbHelp" name="thumb">
                </div>

                <div class="mb-3 form-check">
                    <label for="price" class="form-label">Price</label>
                   <input value="{{$comic->price}}" type="text" class="form-control" id="price" aria-describedby="priceHelp" name="price" required>
                 </div>

                 <div class="mb-3 form-check">
                    <label for="series" class="form-label">Series</label>
                   <input value="{{$comic->series}}" type="text" class="form-control" id="series" aria-describedby="seriesHelp" name="series" required>
                 </div>

                 <div class="mb-3 form-check">
                    <label for="sale_date" class="form-label">Sale date</label>
                   <input value="{{$comic->sale_date}}" type="text" class="form-control" id="sale_date" aria-describedby="sale_dateHelp" name="sale_date" required>
                   <div id="sale_dateHelp" class="form-text text-white">Date format: YYYY-MM-DD</div>
                 </div>

                 <div class="mb-3 form-check w-25" >
                    <label for="type" class="form-label" required>Type</label>
                   <select class="form-control" id="type" aria-describedby="typeHelp" name="type">
                    <option value="#" selected>Choose the type of comic</option>
                    <option value="comic book">Comic book</option>
                    <option value="graphic novel">Graphic novel</option>
                   </select>
                 </div>
                 
                <button type="submit" class="btn btn-success">Save</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
        </form>
    </section>
@endsection