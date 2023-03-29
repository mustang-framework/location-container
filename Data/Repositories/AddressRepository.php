<?php

namespace App\Containers\Vendor\Location\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class AddressRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];
}
