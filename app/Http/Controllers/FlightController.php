<?php

namespace App\Http\Controllers;

use App\Models\Flight;

class FlightController extends Controller
{
    public function index()
    {
        return Flight::all();
    }

    public function indexFirst()
    {
        return Flight::firstWhere('departed', true);
    }
}
