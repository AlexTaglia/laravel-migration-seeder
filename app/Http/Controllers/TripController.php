<?php

namespace App\Http\Controllers;
use App\Trip;

use Illuminate\Http\Request;

class TripController extends Controller
{
    public function index()
    {
        $allTrip = Trip::all();
        return view('trip');
    }
}
