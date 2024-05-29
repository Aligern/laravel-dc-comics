@extends('layouts.app')

@section('content')
    <section class="container text-light">
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method( 'PUT' )
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input value="{{ old('title', $comic->title) }}" type="text" @error('title') is-invalid @enderror class="form-control" id="title" aria-describedby="titleHelp" name="title">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                  <label for="description" class="form-label">Description</label>
                  <textarea value="{{ old('description', $comic->description) }}" class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                </div>

                <div class="mb-3 form-check">
                   <label for="thumb" class="form-label">Thumb</label>
                  <input value="{{ old('thumb', $comic->thumb) }}" @error('thumb') is-invalid @enderror type="text" class="form-control" id="thumb" aria-describedby="thumbHelp" name="thumb">
                  @error('thumb')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>

                <div class="mb-3 form-check">
                    <label for="price" class="form-label">Price</label>
                   <input value="{{ old('price', $comic->price) }}" @error('price') is-invalid @enderror type="text" class="form-control" id="price" aria-describedby="priceHelp" name="price" required>
                   @error('price')
                       <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                  </div>

                 <div class="mb-3 form-check">
                    <label for="series" class="form-label">Series</label>
                   <input value="{{ old('series', $comic->series) }}" @error('series') is-invalid @enderror type="text" class="form-control" id="series" aria-describedby="seriesHelp" name="series" required>
                   @error('series')
                       <div class="alert alert-danger">{{ $message }}</div>
                   @enderror 
                  </div>

                 <div class="mb-3 form-check">
                    <label for="sale_date" class="form-label">Sale date</label>
                   <input value="{{ old('sale_date', $comic->sale_date) }}" @error('sale_date') is-invalid @enderror type="text" class="form-control" id="sale_date" aria-describedby="sale_dateHelp" name="sale_date" required>
                   <div id="sale_dateHelp" class="form-text text-white">Date format: YYYY-MM-DD</div>
                   @error('sale_date')
                       <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                 </div>

                 <div class="mb-3 form-check w-25" >
                    <label for="type" class="form-label" required>Type</label>
                   <select class="form-control" @error('type') is-invalid @enderror id="type" aria-describedby="typeHelp" name="type">
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