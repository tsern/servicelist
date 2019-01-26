<?php

namespace App\Containers\Company\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;
use Illuminate\Support\Facades\Storage;

/**
 * Class DeleteCompanyAction
 * @package App\Containers\Company\Actions
 */
class DeleteCompanyAction extends Action
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

        // delete record from DB
        return Apiato::call('Company@DeleteCompanyTask', [$request->id]);
    }
}
