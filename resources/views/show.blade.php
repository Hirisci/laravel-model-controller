@extends('template.base')

@section('header')
    <a href="{{route('homepage')}}"><i class="fa-solid fa-left"></i> Torna alla home</a>
@endsection

@section('content-page')
<section class="show">
    <div class="container">
        <div class="card">
            <img src="{{$movie->image}}" alt="{{$movie->title}}" class="card__img">
            <div class="card__title">
                <p class="card__title-primary">{{$movie->title}}</p>
                <p class="card__title-secondary">{{$movie->original_title}}</p>
            </div>
            <div class="card__info">
                <div>
                    <div class="card__date">{{$movie->date}}</div>
                    <div class="card__vote">{{$movie->vote}}</div>
                </div>
                <div class="card__nationality">{{$movie->nationality}}</div>
            </div>
        </div>
    </div>
</section>
@endsection