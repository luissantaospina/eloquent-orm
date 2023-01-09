<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Flight;

class FlightController extends Controller
{
    public function index()
    {
        return Flight::all();
    }

    // Obtiene el primer registro que cumpla la condición
    public function indexFirst()
    {
        return Flight::firstWhere('departed', true);
    }

    // Busca un registro por el name, si no lo encuentra crea uno nuevo con la informacion dada uniendo ambos arrays
    public function indexFirstOrCreate()
    {
        return Flight::firstOrCreate(
            [
                'name' => 'Tres'
            ],
            [
                'number' => 987,
                'legs' => 2,
                'active' => false,
                'departed' => false,
                'destinationId' => 4
            ]
        );
    }

    // Busca un registro por el name, si no lo encuentra crea una nuevo instancia de flight (sin guardarla) con la informacion dada uniendo ambos arrays
    public function indexFirstOrNew()
    {
        return Flight::firstOrNew(
            [
                'name' => 'Tres'
            ],
            [
                'number' => 987,
                'legs' => 2,
                'active' => false,
                'departed' => false,
                'destinationId' => 4
            ]
        );
    }

    public function indexWhereWithAction()
    {
        $flightsCountActive =  Flight::where('active', true)->count();     // Cuenta los vuelos activos
        $flightsSumActive =  Flight::where('active', true)->sum('legs');   // Suma los legs de los vuelos activos
        $flightsMaxActive =  Flight::where('active', true)->max('legs');   // Maximo legs de los vuelos activos
        $flightsMinActive =  Flight::where('active', true)->min('legs');   // Minimo legs de los vuelos activos
        $flightsPromActive =  Flight::where('active', true)->avg('legs');  // Promedio legs de los vuelos activos

        return 'Vuelos activos: ' . $flightsCountActive . ' Suma de tramos vuelos activos: '. $flightsSumActive;
    }
}
