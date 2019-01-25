<?php

namespace App\Containers\Address\UI\WEB\Controllers;

use App\Containers\Address\UI\WEB\Requests\CreateAddressRequest;
use App\Containers\Address\UI\WEB\Requests\DeleteAddressRequest;
use App\Containers\Address\UI\WEB\Requests\GetAllAddressesRequest;
use App\Containers\Address\UI\WEB\Requests\FindAddressByIdRequest;
use App\Containers\Address\UI\WEB\Requests\UpdateAddressRequest;
use App\Containers\Address\UI\WEB\Requests\StoreAddressRequest;
use App\Containers\Address\UI\WEB\Requests\EditAddressRequest;
use App\Ship\Parents\Controllers\WebController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Address\UI\WEB\Controllers
 */
class Controller extends WebController
{
    /**
     * Show all entities
     *
     * @param GetAllAddressesRequest $request
     */
    public function index(GetAllAddressesRequest $request)
    {
        $addresses = Apiato::call('Address@GetAllAddressesAction', [$request]);

        // ..
    }

    /**
     * Show one entity
     *
     * @param FindAddressByIdRequest $request
     */
    public function show(FindAddressByIdRequest $request)
    {
        $address = Apiato::call('Address@FindAddressByIdAction', [$request]);

        // ..
    }

    /**
     * Create entity (show UI)
     *
     * @param CreateAddressRequest $request
     */
    public function create(CreateAddressRequest $request)
    {
        // ..
    }

    /**
     * Add a new entity
     *
     * @param StoreAddressRequest $request
     */
    public function store(StoreAddressRequest $request)
    {
        $address = Apiato::call('Address@CreateAddressAction', [$request]);

        // ..
    }

    /**
     * Edit entity (show UI)
     *
     * @param EditAddressRequest $request
     */
    public function edit(EditAddressRequest $request)
    {
        $address = Apiato::call('Address@GetAddressByIdAction', [$request]);

        // ..
    }

    /**
     * Update a given entity
     *
     * @param UpdateAddressRequest $request
     */
    public function update(UpdateAddressRequest $request)
    {
        $address = Apiato::call('Address@UpdateAddressAction', [$request]);

        // ..
    }

    /**
     * Delete a given entity
     *
     * @param DeleteAddressRequest $request
     */
    public function delete(DeleteAddressRequest $request)
    {
         $result = Apiato::call('Address@DeleteAddressAction', [$request]);

         // ..
    }
}
