<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasLinks
{
    public function links(): MorphMany
    {
        return $this->morphMany(Link::class, 'linkable');
    }
}