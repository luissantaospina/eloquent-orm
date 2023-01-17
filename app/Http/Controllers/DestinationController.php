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

    public function indexWithMethods()
    {
        $destinations = Destination::all();
        $destinationsTwo = Destination::whereIn('id', [1, 2, 3])->get();

        // el diff remueve lo objetos del segundo array, es decir, pasa la lista de objetos del array uno que
        // no esten en el array dos
//        return $destinations->diff($destinationsTwo);

        // el except hace lo mismo que el diff solo que no se le envia el objeto si no los ids a excluir
        return $destinations->except([1, 2, 3]);
    }

    public function indexWithContains()
    {
        $destinations = Destination::all();

        // Contains valida si existe un destino con el id enviado
        if ($destinations->contains(25)) {
            return 'El destino existe';
        }
        return 'El NO destino existe';
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

    // Se castea la propiedad tipo json places para su guardado y obtencion
    public function store()
    {
        $places = [
            'capital' => 'Rionegro',
            'turist' => 'Guatape',
            'temperature' => 29
        ];

        $destination = new Destination();
        $destination->name = 'Rionegro';
        $destination->places = $places;
        $destination->save();

        return $destination;
    }
}
