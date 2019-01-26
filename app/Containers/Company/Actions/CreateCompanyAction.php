<?php

namespace App\Containers\Company\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;
use Illuminate\Support\Facades\Storage;

class CreateCompanyAction extends Action
{
    public function run(Request $request)
    {
        // create company model
        $file = Storage::put('public/logos', $request->logo);
        $companyData = $request->sanitizeInput([
            'name',
            'description',
        ]);

        $logo = $request->file('logo');
        $path = $logo->store('uploads', 'public');
        $companyData['logo']= $path;

        $company = Apiato::call('Company@CreateCompanyTask', [$companyData]);

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
        $address = Apiato::call('Company@CreateCompanyTask', [$addressData]);

        return $company;
    }
}
