@extends('layouts.structure')

@section('content')
    <h1>The Bad Guys</h1>
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
@stop