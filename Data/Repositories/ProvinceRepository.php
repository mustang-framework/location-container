<?php

namespace App\Containers\Vendor\Location\Data\Repositories;

use App\Containers\Vendor\Location\Models\Province;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

class ProvinceRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
    ];

    public function model(): string
    {
        return Province::class;
    }
}
