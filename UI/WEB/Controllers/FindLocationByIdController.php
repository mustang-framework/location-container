<?php

namespace App\Containers\Vendor\Location\UI\WEB\Controllers;

use App\Containers\Vendor\Location\Actions\FindLocationByIdAction;
use App\Containers\Vendor\Location\UI\WEB\Requests\FindLocationByIdRequest;
use App\Ship\Parents\Controllers\WebController;

class FindLocationByIdController extends WebController
{
    public function show(FindLocationByIdRequest $request)
    {
        $location = app(FindLocationByIdAction::class)->run($request);
        // ..
    }
}
