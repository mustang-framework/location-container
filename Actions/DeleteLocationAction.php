<?php

namespace App\Containers\Vendor\Location\Actions;

use App\Containers\Vendor\Location\Tasks\DeleteLocationTask;
use App\Containers\Vendor\Location\UI\API\Requests\DeleteLocationRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class DeleteLocationAction extends ParentAction
{
    /**
     * @param DeleteLocationRequest $request
     * @return int
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function run(DeleteLocationRequest $request): int
    {
        return app(DeleteLocationTask::class)->run($request->id);
    }
}
