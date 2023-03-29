<?php

namespace App\Containers\Vendor\Location\Actions;

use Mustang\Core\Exceptions\CoreInternalErrorException;
use App\Containers\Vendor\Location\Tasks\GetAllLocationsTask;
use App\Containers\Vendor\Location\UI\API\Requests\GetAllLocationsRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllLocationsAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetAllLocationsRequest $request): mixed
    {
        return app(GetAllLocationsTask::class)->run();
    }
}
