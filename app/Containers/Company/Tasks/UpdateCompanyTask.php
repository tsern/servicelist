<?php

namespace App\Containers\Company\Tasks;

use App\Containers\Company\Data\Repositories\CompanyRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

/**
 * Class UpdateCompanyTask
 * @package App\Containers\Company\Tasks
 */
class UpdateCompanyTask extends Task
{
    /**
     * @var CompanyRepository
     */
    protected $repository;

    /**
     * UpdateCompanyTask constructor.
     * @param CompanyRepository $repository
     */
    public function __construct(companyRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param $id
     * @param array $data
     * @return mixed
     */
    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        } catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
