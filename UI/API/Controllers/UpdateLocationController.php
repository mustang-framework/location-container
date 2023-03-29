<?php

namespace App\Containers\Vendor\Location\UI\API\Controllers;

use Mustang\Core\Exceptions\IncorrectIdException;
use Mustang\Core\Exceptions\InvalidTransformerException;
use App\Containers\Vendor\Location\Actions\UpdateLocationAction;
use App\Containers\Vendor\Location\UI\API\Requests\UpdateLocationRequest;
use App\Containers\Vendor\Location\UI\API\Transformers\LocationTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;

class UpdateLocationController extends ApiController
{
    /**
     * @param UpdateLocationRequest $request
     * @return array
     * @throws InvalidTransformerException
     * @throws UpdateResourceFailedException
     * @throws IncorrectIdException
     * @throws NotFoundException
     */
    public function updateLocation(UpdateLocationRequest $request): array
    {
        $location = app(UpdateLocationAction::class)->run($request);

        return $this->transform($location, LocationTransformer::class);
    }
}
