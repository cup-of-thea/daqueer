<?php

namespace App\Domain\UseCases\Queries;

use Illuminate\Database\Eloquent\Builder;

class EditionBuilder extends Builder
{
    public function currentEdition(): self
    {
        return $this
            ->whereNotNull('published_at')
            ->where('is_current', true)
            ->orderBy('start_at')
            ->limit(1);
    }
}