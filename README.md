### Mustang Location Container

#### Add address to required model like `User`, `Customer` or etc.

```php
    /**
     * Get all of the models addresses.
     */
    public function addresses(): MorphMany
    {
        return $this->morphMany(Address::class, 'addressable');
    }
```
