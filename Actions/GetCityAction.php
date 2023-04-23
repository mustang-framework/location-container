<?php

namespace App\Containers\Vendor\Location\Actions;

use App\Containers\Vendor\Location\Models\City;
use App\Containers\Vendor\Location\Tasks\GetCityTask;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class GetCityAction extends ParentAction
{
    /**
     * @throws NotFoundException
     */
    public function run($request): City
    {
        return app(GetCityTask::class)->run($request->id);
    }
}
