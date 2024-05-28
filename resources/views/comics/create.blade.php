@extends('layouts.app')

@section('title', 'Aggiungi nuovo comic')

@section('content')
    <section>
        <h1>
            Crea una nuova scheda
        </h1>
        <form action="{{route('comics.store')}}" method="POST" >
                <div class="mb-3">
                  <label for="title" class="form-label">
                    Title
                  </label>
                  <input type="text" class="form-control" id="title" aria-describedby="titleHelp" name="title">
                  <div id="titleHelp" class="form-text">
                   Aggiungi un titolo
                </div>
                </div>
                <div class="mb-3">
                  <label for="description" class="form-label">
                    description
                  </label>
                  <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                </div>

                <div class="mb-3 form-check">
                   <label for="thumb" class="form-label">
                    thumb
                  </label>
                  <input type="text" class="form-control" id="thumb" aria-describedby="thumb" name="thumb">
                </div>

                <div class="mb-3 form-check">
                    <label for="price" class="form-label">
                     price
                   </label>
                   <input type="text" class="form-control" id="price" aria-describedby="price" name="price">
                 </div>

                 <div class="mb-3 form-check">
                    <label for="series" class="form-label">
                     series
                   </label>
                   <input type="text" class="form-control" id="series" aria-describedby="series" name="series">
                 </div>

                 <div class="mb-3 form-check">
                    <label for="sale_date" class="form-label">
                     sale_date
                   </label>
                   <input type="text" class="form-control" id="sale_date" aria-describedby="sale_date" name="sale_date">
                 </div>

                 <div class="mb-3 form-check">
                    <label for="type" class="form-label">
                     type
                   </label>
                   <input type="text" class="form-control" id="type" aria-describedby="type" name="type">
                 </div>
                <button type="submit" class="btn btn-primary">
                    Submit
                </button>
        </form>
    </section>



@endsection