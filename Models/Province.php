<?php

namespace App\Containers\Vendor\Location\Models;

use App\Ship\Parents\Models\Model as ParentModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Province extends ParentModel
{
    protected $fillable = [
        'country_id',
        'name',
        'local_name',
        'slug',
        'code',
        'area_code',
    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'Province';

    public function cities(): HasMany
    {
        return $this->hasMany(City::class, 'province_id', 'id');
    }
}
