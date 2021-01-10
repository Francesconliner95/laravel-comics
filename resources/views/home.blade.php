@extends('layouts.app')

@section('content')
    @include('partials/jumbotron')

    <main class="home-main">
        <div class="container">
            <div class="card-cont">
                <h1>Current Series</h1>
                @foreach ($comics as $index => $items)
                    <div class="card">
                        <a href="{{ route('comic-details', ['id'=> $index]) }}">
                            <div class="img-cont">
                                <img src="{{$items['thumb']}}" alt="sfondo">
                            </div>
                            <p>{{$items['series']}}</p>
                        </a>
                    </div>
                @endforeach
                <button type="button" name="button">Load More</button>
            </div>
        </div>
        <div class="buy-menu">
            <div class="container">
                <div class="items-cont">
                    <a href="#">
                        <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="">
                        <span>Digital Comics</span>
                    </a>
                    <a href="#">
                        <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="">
                        <span>Dc Merchandise</span>
                    </a>
                    <a href="#">
                        <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="">
                        <span>Subscription</span>
                    </a>
                    <a href="#">
                        <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="">
                        <span>Comic Shop Locator</span>
                    </a>
                    <a href="#">
                        <img src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="">
                        <span>Dc Power Visa</span>
                    </a>
                </div>
            </div>
        </div>
    </main>

@endsection
