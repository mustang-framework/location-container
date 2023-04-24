<?php

namespace App\Containers\Vendor\Location\Actions;

use Mustang\Core\Exceptions\CoreInternalErrorException;
use App\Containers\Vendor\Location\Tasks\GetAllProvincesTask;
use App\Containers\Vendor\Location\UI\API\Requests\GetAllProvincesRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Prettus\Repository\Exceptions\RepositoryException;

class GetProvinceAction extends ParentAction
{
    /**
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(): mixed
    {
        return app(GetAllProvincesTask::class)->run();
    }
}
