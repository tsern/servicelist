<?php

namespace App\Containers\Address\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class GetAllAddressesAction
 * @package App\Containers\Address\Actions
 */
class GetAllAddressesAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $addresses = Apiato::call('Address@GetAllAddressesTask', [], ['addRequestCriteria']);

        return $addresses;
    }
}
