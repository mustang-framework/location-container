<?php

namespace App\Containers\Vendor\Location\UI\API\Transformers;

use App\Containers\Vendor\Location\Models\Location;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class LocationTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(Location $location): array
    {
        $response = [
            'object' => $location->getResourceKey(),
            'id' => $location->getHashedKey(),
        ];

        return $this->ifAdmin([
            'real_id' => $location->id,
            'created_at' => $location->created_at,
            'updated_at' => $location->updated_at,
            'readable_created_at' => $location->created_at->diffForHumans(),
            'readable_updated_at' => $location->updated_at->diffForHumans(),
            // 'deleted_at' => $location->deleted_at,
        ], $response);
    }
}
