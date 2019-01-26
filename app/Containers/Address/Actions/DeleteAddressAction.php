<?php

namespace App\Containers\Address\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class DeleteAddressAction
 * @package App\Containers\Address\Actions
 */
class DeleteAddressAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        return Apiato::call('Address@DeleteAddressTask', [$request->id]);
    }
}
