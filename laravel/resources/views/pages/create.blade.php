@extends('layouts.main-layout')

@section('title')
    <title>
        Add a new car
    </title>
@endsection

@section('main')
    <main>
        <div class="container">
            <form action="{{ route('store') }}" method="POST">

                @csrf
                @method('POST')

                <div class="wrapper-input">
                    <label for="name"> Car name: </label>
                    <input type="text" id="name" name="name">
                </div>
                <div class="wrapper-input">
                    <label for="model"> Car model: </label>
                    <input type="text" id="model" name="model">
                </div>
                <div class="wrapper-input">
                    <label for="kw"> Car kw: </label>
                    <input type="number" id="kw" name="kw" min="30">
                </div>
                <div class="wrapper-input">
                    <label for="brand_id"> Brand: </label> 
                    <select name="brand_id" id="brand_id">
                        @foreach ($brands as $brand)
                            <option value="{{ $brand -> id }}">
                                {{ $brand -> name }} 
                                ({{ $brand -> nationality }})
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="wrapper-input">
                    <label for="pilots_id[]"> Pilots: </label> 
                    <select name="pilots_id[]" id="pilots_id[]" multiple>
                        @foreach ($pilots as $pilot)
                            <option value="{{ $pilot -> id }}">
                                {{ $pilot -> firstname }} 
                                {{ $pilot -> lastname}} 
                                ({{ $pilot -> nationality }})
                            </option>
                        @endforeach
                    </select>
                </div>
                <button type="submit">
                    Create
                </button>
            </form>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </main>
@endsection