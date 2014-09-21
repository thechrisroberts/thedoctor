@extends('layouts.structure')

@section('content')
    <h1>The Episodes</h1>
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