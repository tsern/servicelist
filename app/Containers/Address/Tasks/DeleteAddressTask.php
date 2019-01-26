<?php

namespace App\Containers\Address\Tasks;

use App\Containers\Address\Data\Repositories\AddressRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class DeleteAddressTask
 * @package App\Containers\Address\Tasks
 */
class DeleteAddressTask extends Task
{
    /**
     * @var AddressRepository
     */

    protected $repository;

    /**
     * DeleteAddressTask constructor.
     * @param AddressRepository $repository
     */
    public function __construct(AddressRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $id
     * @return int
     */
    public function run($id)
    {
        try {
            return $this->repository->delete($id);
        } catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
