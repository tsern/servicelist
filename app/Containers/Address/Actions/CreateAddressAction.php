<?php

namespace App\Containers\Address\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateAddressAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'country',
            'city',
            'street',
            'number',
            'type',
            'lat',
            'lon'
        ]);

        $address = Apiato::call('Address@CreateAddressTask', [$data]);

        return $address;
    }
}
