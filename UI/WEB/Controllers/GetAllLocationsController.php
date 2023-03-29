<?php

namespace App\Containers\Vendor\Location\UI\WEB\Controllers;

use App\Containers\Vendor\Location\Actions\GetAllLocationsAction;
use App\Containers\Vendor\Location\UI\WEB\Requests\GetAllLocationsRequest;
use App\Ship\Parents\Controllers\WebController;

class GetAllLocationsController extends WebController
{
    public function index(GetAllLocationsRequest $request)
    {
        $locations = app(GetAllLocationsAction::class)->run($request);
        // ..
    }
}
