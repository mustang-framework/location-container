<?php

namespace App\Containers\Vendor\Location\UI\WEB\Controllers;

use App\Containers\Vendor\Location\Actions\FindLocationByIdAction;
use App\Containers\Vendor\Location\Actions\UpdateLocationAction;
use App\Containers\Vendor\Location\UI\WEB\Requests\EditLocationRequest;
use App\Containers\Vendor\Location\UI\WEB\Requests\UpdateLocationRequest;
use App\Ship\Parents\Controllers\WebController;

class UpdateLocationController extends WebController
{
    public function edit(EditLocationRequest $request)
    {
        $location = app(FindLocationByIdAction::class)->run($request);
        // ..
    }

    public function update(UpdateLocationRequest $request)
    {
        $location = app(UpdateLocationAction::class)->run($request);
        // ..
    }
}
