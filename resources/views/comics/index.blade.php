@extends('layouts.app');
@section('content')
    <section>   
        <div class="jumbo"></div>
        <div class="top-part">
            <div class="container">
                <div class="t-y">
                    <span class="current-series">Current Series</span>
                </div>
                <div class="row">
                    @foreach ($comics as $comic)
                        <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4 d-flex">
                            <div class="card bg-dark text-white" style="width: 18rem;">
                                <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->id }}">
                                <div class="card-body">
                                  <h5 class="card-title">{{ $comic->title }}</h5>
                                  <p class="card-text">Costo: {{ $comic->price }}</p>
                                  <p class="card-text">Serie: {{ $comic->series }}</p>
                                  <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">Scopri</a>
                                  <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-dark">Modifica</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="text-center">
                    <a href="{{route('comics.create')}}" class="more">Add Comic</a>
                </div>
            </div>
        </div>
        <div class="bottom-part">
            <div class="container d-flex justify-content-center align-items-center">
                <div>
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                    <span>Digital Comics</span>
                </div>
                <div>
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                    <span>DC Merchandise</span>
                </div>
                <div>
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                    <span>Subscription</span>
                </div>
                <div class="img-locator">
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                    <span>Comic Shop Locator</span>
                </div>
                <div>
                    <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                    <span>DC Power Visa</span>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection