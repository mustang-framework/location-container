<?php

namespace App\Containers\Vendor\Location\UI\API\Controllers;

use App\Containers\Vendor\Location\Actions\GetAllProvincesAction;
use App\Containers\Vendor\Location\UI\API\Transformers\ProvinceTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Mustang\Core\Exceptions\CoreInternalErrorException;
use Mustang\Core\Exceptions\InvalidTransformerException;
use Prettus\Repository\Exceptions\RepositoryException;

class GetProvincesController extends ApiController
{
    /**
     * @return mixed
     * @throws CoreInternalErrorException
     * @throws RepositoryException
     * @throws InvalidTransformerException
     */
    public function getAllProvinces(): mixed
    {
        $provinces = app(GetAllProvincesAction::class)->run();

        return $this->transform($provinces, ProvinceTransformer::class);
    }
}
