<?php

namespace App\Containers\Address\Models;

use App\Ship\Parents\Models\Model;

class Address extends Model
{
    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $table = 'addresses';

    protected $primaryKey = "id";

    protected $fillable = [
        'country',
        'city',
        'street',
        'number',
        'type',
        'lat',
        'lon'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
