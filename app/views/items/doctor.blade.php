@extends('layouts.structure')

@section('content')
    <h1 class="title">{{ $doctor['name'] }}</h1>
    <div class="hero">
        <img src="{{ $doctor['image'] }}">
    </div>

    <div class="rating">
        Rated {{ $ratings['rating'] }} out of 5 with {{ $ratings['numRatings'] }} votes
    </div>

    <p class="description">
        {{ $doctor['description'] }}
    </p>

    <h2>Companions</h2>
    <div class="row companion">
        @foreach ($doctor['companions'] as $companion)
            <div class="item">
                <a href="/companion/{{ $companion->id }}">
                    <img src="{{ $companion->image }}">
                    <h3>{{ $companion->name }}</h3>
                </a>
            </div>
        @endforeach
    </div>

    <h2>Episodes</h2>
    <div class="row episode">
        @foreach ($doctor['episodes'] as $episode)
            <div class="item">
                <a href="/episode/{{ $episode->season }}/{{ $episode->episode }}">
                    <img src="{{ $episode->image }}">
                    <h3>Season {{ $episode->season }} episode {{ $episode->episode }}</h3>
                    <h3>{{ $episode->name }}</h3>
                </a>
            </div>
        @endforeach
    </div>

    @include('layouts.comment', array('type' => 'doctor', 'id' => $doctor['id'], 'comments' => $comments))
@stop