@extends('layouts.app')

@section('content')
    @include('partials/jumbotron')

    <main>
        <div class="container">
            <div class="card">
                <h1>{{$comic['title']}}</h1>
                <p>{{$comic['description']}}</p>
                <p>{{$comic['price']}}</p>
                <p>{{$comic['series']}}</p>
                <p>{{$comic['sale_date']}}</p>
                <p>{{$comic['type']}}</p>
                @foreach ($comic['artists'] as $key => $item)
                    <span>{{$item}}</span>
                    @if(!$loop->last),@endif
                    {{-- ci permette di inserire la virgola a tutti gli elementi tranne l'ultimo --}}
                @endforeach
            </div>
        </div>
    </main>

@endsection
