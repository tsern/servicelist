<?php

namespace App\Containers\Address\Tasks;

use App\Containers\Address\Data\Repositories\AddressRepository;
use App\Ship\Parents\Tasks\Task;

/**
 * Class GetAllAddressesTask
 * @package App\Containers\Address\Tasks
 */
class GetAllAddressesTask extends Task
{
    /**
     * @var AddressRepository
     */

    protected $repository;

    /**
     * GetAllAddressesTask constructor.
     * @param AddressRepository $repository
     */
    public function __construct(AddressRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return mixed
     */
    public function run()
    {
        return $this->repository->paginate();
    }
}
