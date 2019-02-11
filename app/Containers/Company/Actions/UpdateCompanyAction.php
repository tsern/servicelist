<?php

namespace App\Containers\Company\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;
use Illuminate\Support\Facades\Storage;

/**
 * Class UpdateCompanyAction
 * @package App\Containers\Company\Actions
 */
class UpdateCompanyAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        // get company
        $company = Apiato::call('Company@FindCompanyByIdTask', [$request->id]);

        // delete old logo from storage
        Storage::delete($company->logo);

        // upload logo to storage
        $logo = $request->file('logo');
        $path = $logo->store('uploads', 'public');

        $path = 'uploads'.$path;

        // get data from request
        $data = $request->sanitizeInput([
            'name',
            'description',
        ]);

        // set path to new logo
        $data['logo']= $path;

        // update company in DB
        $company = Apiato::call('Company@UpdateCompanyTask', [$request->id, $data]);

        return $company;
    }
}
