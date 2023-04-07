<?php

namespace App\Containers\Vendor\Location\UI\API\Transformers;

use App\Containers\Vendor\Location\Models\Address;
use App\Ship\Parents\Transformers\Transformer as ParentTransformer;

class AddressTransformer extends ParentTransformer
{
    protected array $defaultIncludes = [

    ];

    protected array $availableIncludes = [

    ];

    public function transform(Address $address): array
    {
        $response = [
            'object' => $address->getResourceKey(),
            'id' => $address->getHashedKey(),
            'lat' => $address->lat,
            'long' => $address->long,
            'city_id' => $address->city_id,
            'zip_code' => $address->zip_code,
            'model' => $address->address_type,
            'model_id' => $address->addressable()->getHashedKey(),
        ];

        return $this->ifAdmin([
            'real_id' => $address->id,
            'created_at' => $address->created_at,
            'updated_at' => $address->updated_at,
            'readable_created_at' => $address->created_at->diffForHumans(),
            'readable_updated_at' => $address->updated_at->diffForHumans(),
            'deleted_at' => $address->deleted_at,
        ], $response);
    }
}
