<?php

namespace App\Http\Controllers;
use App\Trip;

use Illuminate\Http\Request;

class TripController extends Controller
{
    public function index()
    {
        $allTrips = Trip::all();
        $TripsEurope = Trip::where('continent', '=', 'Europa')->get();
        return view('trip', compact('allTrips', 'TripsEurope'));
    }
}
