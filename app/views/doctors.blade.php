@extends('layouts.structure')

@section('content')
    <h1>The Modern Doctor</h1>
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
@stop