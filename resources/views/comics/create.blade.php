@extends('layouts.app')

@section('title', 'Aggiungi nuovo comic')

@section('content')
    <section class="container text-white pb-4">
        <h1 class="text-center">Crea una nuova scheda</h1>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" @error('title') is-invalid @enderror id="title" aria-describedby="titleHelp" name="title" value="{{ old('title') }}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" cols="30" rows="10" value="{{ old('description') }}"></textarea>
                <div id="descriptionHelp" class="form-text text-white">Add the description</div>
            </div>
            <div class="mb-3 form-check">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" @error('thumb') is-invalid @enderror class="form-control" id="thumb" aria-describedby="thumbHelp" name="thumb" value="{{ old('thumb') }}">
                @error('thumb')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 form-check">
                <label for="price" class="form-label">Price</label>
                <input type="text" @error('price') is-invalid @enderror class="form-control" id="price" aria-describedby="priceHelp" name="price" value="{{ old('price') }}">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 form-check">
                <label for="series" class="form-label">Series</label>
                <input type="text" @error('series') is-invalid @enderror class="form-control" id="series" aria-describedby="seriesHelp" name="series" value="{{ old('series') }}">
                @error('series')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 form-check">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="text"  @error('sale_date') is-invalid @enderror class="form-control" id="sale_date" aria-describedby="sale_dateHelp" name="sale_date" value="{{ old('sale_date') }}">
                <div id="sale_dateHelp" class="form-text text-white">Date format: YYYY-MM-DD</div>
                @error('sale_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3 form-check w-25">
                <label for="type" class="form-label">Type</label>
                <select class="form-control" id="type" @error('type') is-invalid @enderror aria-describedby="typeHelp" name="type">
                    <option value="" active>Choose the type of comic</option>
                    <option value="comic book">Comic book</option>
                    <option value="graphic novel">Graphic novel</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Save</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </form>
    </section>
@endsection
