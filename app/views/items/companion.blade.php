@extends('layouts.structure')

@section('content')
    <h1 class="title">{{ $companion['name'] }}</h1>
    <div class="hero">
        <img src="{{ $companion['image'] }}">
    </div>

     <div class="rating">
        Rated {{ $ratings['rating'] }} out of 5 with {{ $ratings['numRatings'] }} votes
    </div>

    <p class="description">
        {{ $companion['description'] }}
    </p>

    <h2>Doctors</h2>
    <div class="row companion">
        @foreach ($companion['doctors'] as $companion)
            <div class="item">
                <a href="/doctor/{{ $companion->id }}">
                    <img src="{{ $companion->image }}">
                    <h3>{{ $companion->name }}</h3>
                </a>
            </div>
        @endforeach
    </div>

    <h2>Episodes</h2>
    <div class="row episode">
        @foreach ($companion['episodes'] as $episode)
            <div class="item">
                <a href="/episode/{{ $episode->season }}/{{ $episode->episode }}">
                    <img src="{{ $episode->image }}">
                    <h3>Season {{ $episode->season }} episode {{ $episode->episode }}</h3>
                    <h3>{{ $episode->name }}</h3>
                </a>
            </div>
        @endforeach
    </div>

    @include('layouts.comment', array('type' => 'companion', 'id' => $companion['id'], 'comments' => $comments))
@stop