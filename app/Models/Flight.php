<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Flight
 *
 * @property int $id
 * @property string $name
 * @property string $number
 * @property int $legs
 * @property int $active
 * @property int $departed
 * @property int $destinationId
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Flight newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Flight newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Flight query()
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereDeparted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereDestinationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereLegs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Flight whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Flight extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'number',
        'legs',
        'active',
        'departed',
        'destinationId'
    ];
}
