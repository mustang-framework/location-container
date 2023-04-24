<?php

namespace App\Containers\Vendor\Location\Tasks;

use Mustang\Core\Exceptions\CoreInternalErrorException;
use App\Containers\Vendor\Location\Data\Repositories\ProvinceRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllProvincesTask extends ParentTask
{
    public function __construct(
        protected ProvinceRepository $repository
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(): mixed
    {
        return $this->addRequestCriteria()->repository->all();
    }
}
