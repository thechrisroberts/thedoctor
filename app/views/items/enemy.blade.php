@extends('layouts.structure')

@section('content')
    <h1 class="title">{{ $enemy['name'] }}</h1>
    <div class="hero">
        <img src="{{ $enemy['image'] }}">
    </div>

    <div class="rating">
        Rated {{ $ratings['rating'] }} out of 5 with {{ $ratings['numRatings'] }} votes
    </div>

    <p class="description">
        {{ $enemy['description'] }}
    </p>

    <h2>Episodes</h2>
    <div class="row episode">
        @foreach ($enemy['episodes'] as $episode)
            <div class="item">
                <a href="/episode/{{ $episode->season }}/{{ $episode->episode }}">
                    <img src="{{ $episode->image }}">
                    <h3>Season {{ $episode->season }} episode {{ $episode->episode }}</h3>
                    <h3>{{ $episode->name }}</h3>
                </a>
            </div>
        @endforeach
    </div>

    @include('layouts.comment', array('type' => 'enemy', 'id' => $enemy['id'], 'comments' => $comments))
@stop