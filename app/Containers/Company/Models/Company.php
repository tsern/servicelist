<?php

namespace App\Containers\Company\Models;

use App\Ship\Parents\Models\Model;

class Company extends Model
{

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $table = 'companies';

    protected $primaryKey = "id";

    protected $fillable = [
        'name',
        'description',
        'logo',
        'address_id'
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];


}
