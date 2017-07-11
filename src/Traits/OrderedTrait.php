<?php

namespace Corcel\Traits;

use Illuminate\Database\Eloquent\Builder;

/**
 * Trait OrderedTrait
 *
 * @package Corcel\Traits
 * @author Junior Grossi <juniorgro@gmail.com>
 */
trait OrderedTrait
{
    /**
     * @param Builder $query
     * @return Builder
     */
    public function scopeNewest(Builder $query)
    {
        return $query->orderBy(static::CREATED_AT, 'desc');
    }

    /**
     * @param Builder $query
     * @return Builder
     */
    public function scopeOldest(Builder $query)
    {
        return $query->orderBy(static::CREATED_AT, 'asc');
    }
}
