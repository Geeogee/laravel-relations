@extends('layouts.main-layout')

@section('title')
    <title>
        Homepage
    </title>
@endsection

@section('main')
    <main>
        <div class="container">

            <h1> Cars: </h1>
            <ul class="cars-list">
                @foreach ($cars as $car)
                    <li class="car-name">
                        <a href="{{ route('show', $car -> id) }}">
                            <strong>{{ $car -> name }}</strong>
                        </a>
                        <ul>
                            <li>
                                <strong>Model: </strong> 
                                {{ $car -> model }}
                            </li>
                            <li>
                                <strong>Kw: </strong>
                                {{ $car -> kw }}
                            </li>
                        </ul>
                    </li>
                @endforeach
            </ul>
        </div>
    </main>
@endsection