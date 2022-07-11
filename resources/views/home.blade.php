@extends('template.base')

@section('')

@section('content-page')
    <div class="container">

        <section class="list-film">    
            @foreach ($movies as $movie)    
            <a href="{{route('show',$movie->id)}}" class="card-list">
                <img src="{{$movie->image}}" alt="{{$movie->title}}" class="card-list__img">
            </a>
            @endforeach
        </section>
    </div>
@endsection
