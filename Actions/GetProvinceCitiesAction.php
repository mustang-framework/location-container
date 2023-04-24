<?php

namespace App\Containers\Vendor\Location\Actions;

use App\Containers\Vendor\Location\Tasks\GetProvinceCitiesTask;
use App\Containers\Vendor\Location\UI\API\Requests\GetProvinceCitiesRequest;
use App\Ship\Parents\Actions\Action as ParentAction;
use Mustang\Core\Exceptions\CoreInternalErrorException;
use Prettus\Repository\Exceptions\RepositoryException;

class GetProvinceCitiesAction extends ParentAction
{
    /**
     * @param  GetProvinceCitiesRequest  $request
     * @return mixed
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function run(GetProvinceCitiesRequest $request): mixed
    {
        return app(GetProvinceCitiesTask::class)->run($request->province_id);
    }
}
