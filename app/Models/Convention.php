<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convention extends Model
{
    use HasFactory;

    const CREATED_AT = 'nombre_created';      // Cambia nombre del created
    const UPDATED_AT = 'nombre_update';       // Cambia nombre del update

    protected $table = 'list_destination';    // Cambia el nombre de la tablapor defecto que asigna laravel

    protected $primaryKey = 'identificator';  // Cambia nimbre de llave primaria

    public $incrementing = false;             // El id no es auto incrementable

    public $keyType = 'string';               // Cambia tipo de variable de la llave primaria

    public $timestamps = false;               // Se desactivan los campos de creación y actualización

    protected $connection = 'sqlite';         // Cambia conexón de bd
}
