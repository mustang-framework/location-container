<?php

namespace App\Containers\Vendor\Location\UI\WEB\Controllers;

use App\Containers\Vendor\Location\Actions\CreateLocationAction;
use App\Containers\Vendor\Location\UI\WEB\Requests\CreateLocationRequest;
use App\Containers\Vendor\Location\UI\WEB\Requests\StoreLocationRequest;
use App\Ship\Parents\Controllers\WebController;

class CreateLocationController extends WebController
{
    public function create(CreateLocationRequest $request)
    {
        // ..
    }

    public function store(StoreLocationRequest $request)
    {
        $location = app(CreateLocationAction::class)->run($request);
        // ..
    }
}
