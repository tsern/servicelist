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

        $file = Storage::put('public/logos', $request->logo);
        $data = $request->sanitizeInput([
            'name',
            'description',
        ]);

        $logo = $request->file('logo');
        $path = $logo->store('uploads', 'public');
        $data['logo']= $path;

        $company = Apiato::call('Company@CreateCompanyTask', [$data]);

        return $company;
    }
}
