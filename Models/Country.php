<?php

namespace App\Containers\Vendor\Location\Models;

use App\Ship\Parents\Models\Model as ParentModel;

class Country extends ParentModel
{
    protected $fillable = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Country';
}
