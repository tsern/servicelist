<?php

namespace App\Containers\Company\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

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
        return Apiato::call('Company@DeleteCompanyTask', [$request->id]);
    }
}
