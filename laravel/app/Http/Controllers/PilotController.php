<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
use App\Brand;

class PilotController extends Controller
{
    public function home() {

        $cars = Car::all();

        return view('pages.home', compact('cars'));
    }

    public function show($id) {

        $car = Car::findOrFail($id);

        return view('pages.show', compact('car'));
    }

    public function create() {

        $brands = Brand::all();

        return view('pages.create', compact('brands'));
    }

    public function store(Request $request) {

        $validated = $request -> validate([
            'name' => 'required|min:3',
            'model' => 'required|min:3',
            'kw' => 'required|integer|min:30|max:100'
        ]);
        
        $brand = Brand::findOrFail($request -> get('brand_id'));
        $car = Car::make($validated);

        $car -> brand() -> associate($brand);
        $car -> save();


        return redirect() -> route('home');
    }
}
