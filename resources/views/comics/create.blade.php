@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="container">
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="titleHelp" name="title">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label @error('description') is-invalid @enderror">Description</label>
            <input type="text" class="form-control" id="description" name="description">
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label @error('thumb') is-invalid @enderror">Image Link</label>
            <input type="text" class="form-control" id="thumb" name="thumb">
            @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label @error('price') is-invalid @enderror">Price</label>
            <input type="text" class="form-control" id="price" name="price">
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="series" class="form-label @error('series') is-invalid @enderror">Series</label>
            <input type="text" class="form-control" id="series" name="series">
            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label @error('type') is-invalid @enderror">Type</label>
            <input type="text" class="form-control" id="type" name="type">
            @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</section>
@endsection