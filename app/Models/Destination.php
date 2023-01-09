<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Prunable;


class Destination extends Model
{
    use HasFactory;
    use Prunable;

    protected $fillable = [
      'name'
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
}
