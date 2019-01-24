<?php

namespace App\Containers\Company\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class GetAllCompaniesAction
 * @package App\Containers\Company\Actions
 */
class GetAllCompaniesAction extends Action
{
    /**
     * @param Request $request
     * @return mixed|\Illuminate\Pagination\LengthAwarePaginator
     */
    public function run(Request $request)
    {
        $companies = Apiato::call('Company@GetAllCompaniesTask', [], ['addRequestCriteria']);

        return $companies;
    }
}
