<?php

namespace App\Containers\Vendor\Location\Tasks;

use App\Containers\Vendor\Location\Data\Repositories\LocationRepository;
use App\Containers\Vendor\Location\Models\Location;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class FindLocationByIdTask extends ParentTask
{
    public function __construct(
        protected LocationRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Location
    {
        try {
            return $this->repository->find($id);
        } catch (Exception) {
            throw new NotFoundException();
        }
    }
}
