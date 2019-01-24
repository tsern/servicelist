<?php

namespace App\Containers\Company\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateCompanyAction extends Action
{
    public function run(Request $request)
    {
        $company = Apiato::call('Company@UpdateCompanyTask', [$request->id]);

        return $company;
    }
}