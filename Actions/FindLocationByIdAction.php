<?php

namespace App\Containers\Vendor\Location\Actions;

use App\Containers\Vendor\Location\Models\Location;
use App\Containers\Vendor\Location\Tasks\FindLocationByIdTask;
use App\Containers\Vendor\Location\UI\API\Requests\FindLocationByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindLocationByIdAction extends ParentAction
{
    /**
     * @throws NotFoundException
     */
    public function run(FindLocationByIdRequest $request): Location
    {
        return app(FindLocationByIdTask::class)->run($request->id);
    }
}
