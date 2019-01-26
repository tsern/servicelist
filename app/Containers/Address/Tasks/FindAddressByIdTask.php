<?php

namespace App\Containers\Address\Tasks;

use App\Containers\Address\Data\Repositories\AddressRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class FindAddressByIdTask
 * @package App\Containers\Address\Tasks
 */
class FindAddressByIdTask extends Task
{
    /**
     * @var AddressRepository
     */
    protected $repository;

    /**
     * FindAddressByIdTask constructor.
     * @param AddressRepository $repository
     */
    public function __construct(AddressRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function run($id)
    {
        try {
            return $this->repository->find($id);
        } catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
