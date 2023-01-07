<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Flight;

class DestinationController extends Controller
{
    public function index()
    {
        return Destination::all();
    }

    // Agrega una columna a la consulta de destinos, trayendo el ultimo vuelo creado
    public function indexWithDate()
    {
        return Destination::addSelect([
            'last_flight' => Flight::select('number')
                ->whereColumn('destinationId', 'destinations.id')
                ->orderBy('created_at', 'desc')
                ->limit(1)
        ])->get();
    }
}
