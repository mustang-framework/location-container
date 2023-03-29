<?php

namespace App\Containers\Vendor\Location\UI\API\Controllers;

use Mustang\Core\Exceptions\CoreInternalErrorException;
use Mustang\Core\Exceptions\InvalidTransformerException;
use App\Containers\Vendor\Location\Actions\GetAllLocationsAction;
use App\Containers\Vendor\Location\UI\API\Requests\GetAllLocationsRequest;
use App\Containers\Vendor\Location\UI\API\Transformers\LocationTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllLocationsController extends ApiController
{
    /**
     * @throws InvalidTransformerException
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     */
    public function getAllLocations(GetAllLocationsRequest $request): array
    {
        $locations = app(GetAllLocationsAction::class)->run($request);

        return $this->transform($locations, LocationTransformer::class);
    }
}
