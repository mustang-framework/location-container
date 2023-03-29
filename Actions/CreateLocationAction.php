<?php

namespace App\Containers\Vendor\Location\Actions;

use Mustang\Core\Exceptions\IncorrectIdException;
use App\Containers\Vendor\Location\Models\Location;
use App\Containers\Vendor\Location\Tasks\CreateLocationTask;
use App\Containers\Vendor\Location\UI\API\Requests\CreateLocationRequest;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Actions\Action as ParentAction;

class CreateLocationAction extends ParentAction
{
    /**
     * @param CreateLocationRequest $request
     * @return Location
     * @throws CreateResourceFailedException
     * @throws IncorrectIdException
     */
    public function run(CreateLocationRequest $request): Location
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        return app(CreateLocationTask::class)->run($data);
    }
}
