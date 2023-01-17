<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Prunable;

class Destination extends Model
{
    use HasFactory;
    use Prunable;

    protected $fillable = [
        'name',
        'places'
    ];

    // Se castea la propeidad tipo json places para su guardado y obtencion
    protected $casts = [
        'places' => 'array'
    ];

    // Al ejecutar el comando php artisan model:prune se eliminaran los registros
    public function prunable()
    {
        return static::where('name', 'Tres');
    }

    // Se ejecuta antes de la funcion prunable, se usa para elimnar archivos o relaciones
    public function pruning()
    {
    }

    // Un Mutador realiza la transformacion de uno o mas campos antes de su guardado en bd, la
    // funcion debe llevar el nombre del atributo a modificar y en el set se define la funcion
    protected function name(): Attribute
    {
        return new Attribute(
            // Un Accesor realiza la transformacion de uno o mas campos antes de su consulta en bd, la
            // funcion debe llevar el nombre del atributo a modificar y en el get se define la funcion
            get: fn($value) => ucwords($value),

            // Un Mutador realiza la transformacion de uno o mas campos antes de su guardado en bd, la
            // funcion debe llevar el nombre del atributo a modificar y en el set se define la funcion
            set: fn($value) => strtolower($value)
        );
    }
}
