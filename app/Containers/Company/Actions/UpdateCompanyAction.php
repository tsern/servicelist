<?php

namespace App\Containers\Company\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateCompanyAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'name',
            'description',
        ]);
        if ($request['logo']->isEmpty()) {
            $data = $request->$logo;
        }
        $company = Apiato::call('Company@UpdateCompanyTask', [$request->id, $data]);

        return $company;
    }
}
