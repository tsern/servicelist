<?php

namespace App\Containers\Address\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class FindAddressByIdAction
 * @package App\Containers\Address\Actions
 */
class FindAddressByIdAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $address = Apiato::call('Address@FindAddressByIdTask', [$request->id]);

        return $address;
    }
}
