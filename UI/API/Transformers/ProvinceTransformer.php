<?php

namespace App\Containers\Vendor\Location\UI\API\Transformers;

use App\Containers\Vendor\Location\Models\Province;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;
use League\Fractal\Resource\Collection;

class ProvinceTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [
        'cities'
    ];

    protected array $availableIncludes = [

    ];

    public function transform(Province $province): array
    {
        $response = [
            'object' => $province->getResourceKey(),
            'id'     => $province->getHashedKey(),
        ];

        return $this->ifAdmin([
            'real_id'             => $province->id,
            'country_id'          => $province->country_id,
            'name'                => $province->name,
            'local_name'          => $province->local_name,
            'slug'                => $province->slug,
            'code'                => $province->code,
            'created_at'          => $province->created_at,
            'updated_at'          => $province->updated_at,
            'readable_created_at' => $province->created_at->diffForHumans(),
            'readable_updated_at' => $province->updated_at->diffForHumans(),
        ], $response);
    }

    public function includeCities(Province $province): Collection
    {
        return $this->collection($province->cities, new CityTransformer());
    }
}
