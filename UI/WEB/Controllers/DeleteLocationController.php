<?php

namespace App\Containers\Vendor\Location\UI\WEB\Controllers;

use App\Containers\Vendor\Location\Actions\DeleteLocationAction;
use App\Containers\Vendor\Location\UI\WEB\Requests\DeleteLocationRequest;
use App\Ship\Parents\Controllers\WebController;

class DeleteLocationController extends WebController
{
    public function destroy(DeleteLocationRequest $request)
    {
         $result = app(DeleteLocationAction::class)->run($request);
         // ..
    }
}
