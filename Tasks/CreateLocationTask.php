<?php

namespace App\Containers\Vendor\Location\Tasks;

use App\Containers\Vendor\Location\Data\Repositories\LocationRepository;
use App\Containers\Vendor\Location\Models\Location;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class CreateLocationTask extends ParentTask
{
    public function __construct(
        protected LocationRepository $repository
    ) {
    }

    /**
     * @throws CreateResourceFailedException
     */
    public function run(array $data): Location
    {
        try {
            return $this->repository->create($data);
        } catch (Exception) {
            throw new CreateResourceFailedException();
        }
    }
}
