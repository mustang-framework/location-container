<?php

namespace App\Containers\Vendor\Location\Data\Factories;

use App\Containers\Vendor\Location\Models\Location;
use App\Ship\Parents\Factories\Factory as ParentFactory;

class LocationFactory extends ParentFactory
{
    protected $model = Location::class;

    public function definition(): array
    {
        return [
            // Add your model fields here
            // 'name' => $this->faker->name(),
        ];
    }
}
