<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Association extends Model
{
    use HasFactory, HasLinks;

    public function editions(): BelongsToMany
    {
        return $this->belongsToMany(Edition::class);
    }
}
