<?php

namespace App\Containers\Vendor\Location\Models;

use App\Ship\Parents\Models\Model as ParentModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends ParentModel
{
    protected $fillable = [
        'province_id',
        'name',
        'local_name',
        'slug',
    ];

    /**
     * A resource key to be used in the serialized responses.
     */
    protected string $resourceKey = 'City';

    public function addresses(): HasMany
    {
        return $this->hasMany(Address::class, 'city_id', 'id');
    }

    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class, 'province_id', 'id');
    }
}
