<?php

namespace App\Models;

use App\Domain\UseCases\Queries\EditionBuilder;
use App\Domain\ValueObjects\RelativeTimePosition;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

/**
 * @method static currentEdition()
 */
class Edition extends Model
{
    use HasFactory, HasSlug;

    protected $casts = [
        'start_at' => 'datetime',
        'end_at' => 'datetime',
        'published_at' => 'datetime',
    ];

    public function associations(): BelongsToMany
    {
        return $this->belongsToMany(Association::class);
    }

    public function guests(): BelongsToMany
    {
        return $this->belongsToMany(Guest::class);
    }

    public function period(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->start_at?->isoFormat('LL') . ' - ' . $this->end_at?->isoFormat('LL')
        );
    }

    public function relativeTimePosition(): Attribute
    {
        return Attribute::make(
            get: fn() => RelativeTimePosition::create($this->start_at, $this->end_at)->getPosition()
        );
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug')
            ->doNotGenerateSlugsOnUpdate();
    }

    public function newEloquentBuilder($query): EditionBuilder
    {
        return new EditionBuilder($query);
    }
}
