<?php

namespace App\Containers\Vendor\Location\Actions;

use Mustang\Core\Exceptions\IncorrectIdException;
use App\Containers\Vendor\Location\Models\Location;
use App\Containers\Vendor\Location\Tasks\UpdateLocationTask;
use App\Containers\Vendor\Location\UI\API\Requests\UpdateLocationRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class UpdateLocationAction extends ParentAction
{
    /**
     * @param UpdateLocationRequest $request
     * @return Location
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function run(UpdateLocationRequest $request): Location
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(UpdateLocationTask::class)->run($data, $request->id);
    }
}
