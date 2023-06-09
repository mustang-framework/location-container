<?php

namespace App\Containers\Vendor\Location\UI\API\Transformers;

use App\Containers\Vendor\Location\Models\City;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;
use League\Fractal\Resource\Collection;

class CityTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(City $city): array
    {
        $response = [
            'object' => $city->getResourceKey(),
            'id'     => $city->getHashedKey(),
        ];

        return $this->ifAdmin([
            'real_id'             => $city->id,
            'province_id'         => $city->province_id,
            'name'                => $city->name,
            'local_name'          => $city->local_name,
            'slug'                => $city->slug,
            'created_at'          => $city->created_at,
            'updated_at'          => $city->updated_at,
            'readable_created_at' => $city->created_at->diffForHumans(),
            'readable_updated_at' => $city->updated_at->diffForHumans(),
        ], $response);
    }
}
