<?php

namespace App\Observers;

use App\Models\Flight;

class FlightObserver
{
    // Intercepta la peticion ientras se esta creando un nuevo registro
    // Hay muchas funciones para esta interceptación: creating, deleting, updating...
    public function creating(Flight $flight) {  // Antes de crear
        $flight->number = 123456;
    }

    public function created(Flight $flight) {  // Despues de crear
    }

    public function retrieved(Flight $flight) { // Cuando se obtiene un elemento
    }

    public function updating(Flight $flight) { // Antes de actualizar
    }

    public function updated(Flight $flight) {  // Despues de actualizar
    }

    public function saving(Flight $flight) {   // Antes de guardar
    }

    public function saved(Flight $flight) {    // Despues de guardar
    }
}
