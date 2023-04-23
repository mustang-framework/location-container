<?php

namespace App\Containers\Vendor\Location\UI\API\Controllers;

use App\Containers\Vendor\Location\Actions\GetAllCitiesAction;
use App\Containers\Vendor\Location\UI\API\Transformers\CityTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Mustang\Core\Exceptions\CoreInternalErrorException;
use Mustang\Core\Exceptions\InvalidTransformerException;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllCitiesController extends ApiController
{
    /**
     * @return array
     * @throws CoreInternalErrorException
     * @throws InvalidTransformerException
     * @throws RepositoryException
     */
    public function getAllCities(): array
    {
        $cities = app(GetAllCitiesAction::class)->run();

        return $this->transform($cities, CityTransformer::class);
    }
}
