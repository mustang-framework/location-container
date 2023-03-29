<?php

namespace App\Containers\Vendor\Location\UI\API\Controllers;

use Mustang\Core\Exceptions\IncorrectIdException;
use Mustang\Core\Exceptions\InvalidTransformerException;
use App\Containers\Vendor\Location\Actions\CreateLocationAction;
use App\Containers\Vendor\Location\UI\API\Requests\CreateLocationRequest;
use App\Containers\Vendor\Location\UI\API\Transformers\LocationTransformer;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Http\JsonResponse;

class CreateLocationController extends ApiController
{
    /**
     * @param CreateLocationRequest $request
     * @return JsonResponse
     * @throws CreateResourceFailedException
     * @throws InvalidTransformerException
     * @throws IncorrectIdException
     */
    public function createLocation(CreateLocationRequest $request): JsonResponse
    {
        $location = app(CreateLocationAction::class)->run($request);

        return $this->created($this->transform($location, LocationTransformer::class));
    }
}
