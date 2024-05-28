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
            <p>{!!$comic->description!!}</p>
            <div>
                Tipo: {{$comic->series}}
            </div>
            <div>
                Prezzo: {{$comic->price}}
            </div>
            <div>
                Vendita: {{$comic->sale_date}}
            </div>
        </div>
    </div>
</section>
@endsection