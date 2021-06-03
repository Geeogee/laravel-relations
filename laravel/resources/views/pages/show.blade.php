@extends('layouts.main-layout')

@section('title')
    <title>
        {{ $car -> name }}
    </title>
@endsection

@section('main')
    <main>
        <div class="container">
            <div id="wrapper-car">
                <h1>
                    {{ $car -> name }}
                </h1>

                <ul>
                    <li>
                        <strong>Model: </strong> 
                        {{ $car -> model }}
                    </li>
                    <li>
                        <strong>Kw: </strong> 
                        {{ $car -> kw }}
                    </li>
                    <li>
                        <strong>Brand: </strong> 
                        {{ $car -> brand -> name }} ({{ $car -> brand -> nationality }})
                    </li>
                    <li class="pilots-list">
                        <strong>Pilots: {{ $car -> pilots -> count() }} </strong>
                        @foreach ($car -> pilots as $pilot)
                        <ul class="pilot">
                            <li>
                                <strong>Pilot name: </strong> 
                                {{ $pilot -> firstname }}
                                {{ $pilot -> lastname }}
                            </li>
                            <li>
                                <strong>Pilot nationality: </strong> 
                                {{ $pilot -> nationality }}
                            </li>
                            <li>
                                <strong>Pilot birth date: </strong> 
                                {{ $pilot -> date_of_birth }}
                            </li>
                        </ul>
                        @endforeach
                    </li>
                </ul>
            </div>
        </div>
    </main>
@endsection