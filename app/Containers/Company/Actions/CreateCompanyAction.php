<?php

namespace App\Containers\Company\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;
use Illuminate\Support\Facades\Storage;

/**
 * Class CreateCompanyAction
 * @package App\Containers\Company\Actions
 */
class CreateCompanyAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        //create address model
        $addressData = $request->sanitizeInput([
            'country',
            'city',
            'street',
            'number',
            'type',
            'lat',
            'lon'
        ]);
        $address = Apiato::call('Address@CreateAddressTask', [$addressData]);

        // create company model
        $companyData = $request->sanitizeInput([
            'name',
            'description',
        ]);

        $companyData['address_id'] = $address->id;

        $file = Storage::put('public/uploads', $request->logo);
        $companyData['logo']= $file;

        $company = Apiato::call('Company@CreateCompanyTask', [$companyData]);

        return $company;
    }
}
