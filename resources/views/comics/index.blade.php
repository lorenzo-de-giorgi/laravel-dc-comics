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
                        <div class="col-12 col-md-6 col-lg-3 col-xl-2 mb-4">
                            <div>
                                <div class="square">
                                    <img src="{{ $comic->thumb }}">
                                </div>
                                <p>{{ $comic->series }}</p>
                                <p>Costo: {{ $comic->price }}</p>
                                <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">Scopri</a>
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