<?php

namespace App\Containers\Vendor\Location\Tasks;

use App\Containers\Vendor\Location\Data\Repositories\AddressRepository;
use App\Containers\Vendor\Location\Models\Address;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class FindAddressByIdTask extends ParentTask
{
    public function __construct(
        protected AddressRepository $repository
    ) {
    }

    /**
     * @throws NotFoundException
     */
    public function run($id): Address
    {
        try {
            return $this->repository->find($id);
        } catch (Exception) {
            throw new NotFoundException();
        }
    }
}
