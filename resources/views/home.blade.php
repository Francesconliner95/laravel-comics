@extends('layouts.app')

@section('content')
    @include('partials/jumbotron')

    <main class="home-main">
        <div class="container">
            <div class="card-cont">
                @foreach ($comics as $key => $items)
                    <div class="card">
                        <div class="img-cont">
                            <img src="{{$items['thumb']}}" alt="sfondo">
                        </div>
                        <p>{{$items['title']}}</p>
                    </div>
                @endforeach
            </div>    
        </div>
    </main>

@endsection
