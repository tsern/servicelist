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
        $file = Storage::put('public/logos', $request->logo);
        $companyData = $request->sanitizeInput([
            'name',
            'description',
        ]);

        $companyData['address_id'] = $address->id;

        $logo = $request->file('logo');
        $path = $logo->store('uploads', 'public');
        $companyData['logo']= $path;

        $company = Apiato::call('Company@CreateCompanyTask', [$companyData]);

        return $company;
    }
}
