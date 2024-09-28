<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Edition extends Model
{
    use HasFactory;

    public function associations(): BelongsToMany
    {
        return $this->belongsToMany(Association::class);
    }
   
    public function guests(): BelongsToMany
    {
        return $this->belongsToMany(Guest::class);
    }
}
