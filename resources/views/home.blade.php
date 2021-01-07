@extends('layouts.app')

@section('content')
    @include('partials/jumbotron')

    <main class="home-main">
        <div class="container">
            <div class="card-cont">
                <h1>Current Series</h1>
                @foreach ($comics as $key => $items)
                    <div class="card">
                        <div class="img-cont">
                            <img src="{{$items['thumb']}}" alt="sfondo">
                        </div>
                        <p>{{$items['series']}}</p>
                    </div>
                @endforeach
                <button type="button" name="button">Load More</button>
            </div>
        </div>
    </main>

@endsection
