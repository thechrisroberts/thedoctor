@extends('layouts.structure')

@section('content')
    <h1 class="title">{{ $episode['name'] }}</h1>
    <div class="hero">
        <img src="{{ $episode['image'] }}">
    </div>

    <div class="rating">
        Rated {{ $ratings['rating'] }} out of 5 with {{ $ratings['numRatings'] }} votes
    </div>

    <p class="description">
        {{ $episode['description'] }}
    </p>

    @if (isset($episode['doctors']))
        <h2>Doctors</h2>
        <div class="row doctor">
            @foreach ($episode['doctors'] as $doctor)
                <div class="item">
                    <a href="/doctor/{{ $doctor->id }}">
                        <img src="{{ $doctor->image }}">
                        <h3>{{ $doctor->name }}</h3>
                    </a>
                </div>
            @endforeach
        </div>
    @endif

    @if (isset($episode['companions']))
        <h2>Companions</h2>
        <div class="row companion">
            @foreach ($episode['companions'] as $companion)
                <div class="item">
                    <a href="/companion/{{ $companion->id }}">
                        <img src="{{ $companion->image }}">
                        <h3>{{ $companion->name }}</h3>
                    </a>
                </div>
            @endforeach
        </div>
    @endif

    @if (isset($episode['enemies']) && sizeof($episode['enemies']) > 0)
        <h2>Enemies</h2>
        <div class="row enemy">
            @foreach ($episode['enemies'] as $enemy)
                <div class="item">
                    <a href="/enemy/{{ $enemy->id }}">
                        <img src="{{ $enemy->image }}">
                        <h3>{{ $enemy->name }}</h3>
                    </a>
                </div>
            @endforeach
        </div>
    @endif

    @include('layouts.comment', array('type' => 'episode', 'id' => $episode['id'], 'comments' => $comments))
@stop