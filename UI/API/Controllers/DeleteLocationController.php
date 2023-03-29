<?php

namespace App\Containers\Vendor\Location\UI\API\Controllers;

use App\Containers\Vendor\Location\Actions\DeleteLocationAction;
use App\Containers\Vendor\Location\UI\API\Requests\DeleteLocationRequest;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class DeleteLocationController extends ApiController
{
    /**
     * @param DeleteLocationRequest $request
     * @return JsonResponse
     * @throws DeleteResourceFailedException
     * @throws NotFoundException
     */
    public function deleteLocation(DeleteLocationRequest $request): JsonResponse
    {
        app(DeleteLocationAction::class)->run($request);

        return $this->noContent();
    }
}
