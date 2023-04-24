<?php

namespace App\Containers\Vendor\Location\UI\API\Controllers;

use App\Containers\Vendor\Location\Actions\GetProvinceCitiesAction;
use App\Containers\Vendor\Location\UI\API\Requests\GetProvinceCitiesRequest;
use App\Containers\Vendor\Location\UI\API\Transformers\CityTransformer;
use App\Ship\Parents\Controllers\ApiController;

class GetProvinceCitiesController extends ApiController
{
    public function provinceCities(GetProvinceCitiesRequest $request)
    {
        $cities = app(GetProvinceCitiesAction::class)->run($request);

        return $this->transform($cities, CityTransformer::class);
    }
}
