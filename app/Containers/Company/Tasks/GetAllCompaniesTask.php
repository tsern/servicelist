<?php

namespace App\Containers\Company\Tasks;

use App\Ship\Parents\Tasks\Task;
use App\Containers\Company\Data\Repositories\CompanyRepository;

/**
 * Class GetAllCompaniesTask
 * @package App\Containers\Company\Tasks
 */
class GetAllCompaniesTask extends Task
{

    /**
     * @var  \App\Containers\User\Data\Repositories\UserRepository
     */
    protected $repository;

    /**
     * GetAllCompaniesTask constructor.
     * @param CompanyRepository $repository
     */
    public function __construct(CompanyRepository $repository)
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
