<?php

namespace App\Domain\UseCases\Queries;

use Illuminate\Database\Eloquent\Builder;

class EditionBuilder extends Builder
{
    public function incomingEdition(): self
    {
        return $this
            ->whereNotNull('published_at')
            ->where('start_at', '>', now())
            ->orderBy('start_at')
            ->limit(1);
    }
}