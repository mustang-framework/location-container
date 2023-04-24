<?php

namespace App\Containers\Vendor\Location\Tasks;

use App\Containers\Vendor\Location\Data\Repositories\CityRepository;
use App\Containers\Vendor\Location\Data\Repositories\ProvinceRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Mustang\Core\Exceptions\CoreInternalErrorException;
use Prettus\Repository\Exceptions\RepositoryException;

class GetProvinceCitiesTask extends ParentTask
{
    public function __construct(
        protected ProvinceRepository $repository
    ) {
    }

    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(string|int $provinceId)
    {
        return $this->addRequestCriteria()->repository->find($provinceId);
    }
}
