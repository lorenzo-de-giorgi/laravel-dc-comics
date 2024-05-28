@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="container bg-white mt-4">
    <h1 class="text-center">{{$comic->title}}</h1>
    <div class="row">
        <div class="col-12 col-md-4">
            <img src="{{$comic->thumb}}" class="img-fluid" alt="{{$comic->title}}">
        </div>
        <div class="col-12 col-md-8">
            <p>{{$comic->description}}</p>
            <div>
                Tipo: {{$comic->series}}
            </div>
            <div>
                Prezzo: {{$comic->price}}
            </div>
            <div>
                Vendita: {!!$comic->sale_date!!}
            </div>
            <div class="d-flex mt-5">
                <a href="{{route('comics.edit', $comic->id)}}" class="me-3 btn btn-dark">Modifica</a>
                <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input id="comicDelete" type="submit" value="Elimina" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Are you sure to delete this comic?</div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-danger">Delete</button>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection