<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PilotController extends Controller
{
    public function home() {

        return view('pages.home');
    }
}
