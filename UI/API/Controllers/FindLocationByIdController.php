<?php

namespace App\Containers\Vendor\Location\UI\API\Controllers;

use Mustang\Core\Exceptions\InvalidTransformerException;
use App\Containers\Vendor\Location\Actions\FindLocationByIdAction;
use App\Containers\Vendor\Location\UI\API\Requests\FindLocationByIdRequest;
use App\Containers\Vendor\Location\UI\API\Transformers\LocationTransformer;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Controllers\ApiController;

class FindLocationByIdController extends ApiController
{
    /**
     * @throws InvalidTransformerException|NotFoundException
     */
    public function findLocationById(FindLocationByIdRequest $request): array
    {
        $location = app(FindLocationByIdAction::class)->run($request);

        return $this->transform($location, LocationTransformer::class);
    }
}
