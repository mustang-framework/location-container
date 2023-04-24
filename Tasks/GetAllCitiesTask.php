<?php

namespace App\Containers\Vendor\Location\Tasks;

use Mustang\Core\Exceptions\CoreInternalErrorException;
use App\Containers\Vendor\Location\Data\Repositories\CityRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllCitiesTask extends ParentTask
{
    public function __construct(
        protected CityRepository $repository
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(bool $skipPagination = false): mixed
    {
        $repository = $this->addRequestCriteria()->repository;

        return $skipPagination ? $repository->all() : $repository->paginate();
    }
}
