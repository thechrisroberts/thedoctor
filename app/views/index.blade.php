@extends('layouts.structure')

@section('content')
    <h1>Doctors <span><a href="/doctors">See All</a></span></h1>
    <div class="row doctor">
        @foreach ($doctors as $doctor)
            <div class="item">
                <a href="/doctor/{{ $doctor->id }}">
                    <img src="{{ $doctor->image }}">
                    <h3>{{ $doctor->name }}</h3>
                </a>
            </div>
        @endforeach
    </div>

    <h1>Companions <span><a href="/companions">See All</a></span></h1>
    <div class="row companion">
        @foreach ($companions as $companion)
            <div class="item">
                <a href="/companion/{{ $companion->id }}">
                    <img src="{{ $companion->image }}">
                    <h3>{{ $companion->name }}</h3>
                </a>
            </div>
        @endforeach
    </div>

    <h1>Enemies <span><a href="/enemies">See All</a></span></h1>
    <div class="row enemy">
        @foreach ($enemies as $enemy)
            <div class="item">
                <a href="/enemy/{{ $enemy->id }}">
                    <img src="{{ $enemy->image }}">
                    <h3>{{ $enemy->name }}</h3>
                </a>
            </div>
        @endforeach
    </div>

    <h1>Episodes <span><a href="/episodes">See All</a></span></h1>
    <div class="row episode">
        @foreach ($episodes as $episode)
            <div class="item">
                <a href="/episode/{{ $episode->season }}/{{ $episode->episode }}">
                    <img src="{{ $episode->image }}">
                    <h3>Season {{ $episode->season }} episode {{ $episode->episode }}</h3>
                    <h3>{{ $episode->name }}</h3>
                </a>
            </div>
        @endforeach
    </div>
@stop