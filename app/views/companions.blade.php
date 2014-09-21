@extends('layouts.structure')

@section('content')
    <h1>The Companions</h1>
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
@stop