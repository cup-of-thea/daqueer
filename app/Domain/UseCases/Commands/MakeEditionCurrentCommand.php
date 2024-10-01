<?php

namespace App\Domain\UseCases\Commands;

use App\Models\Edition;

class MakeEditionCurrentCommand
{
    public function makeCurrent(int $editionId, bool $state): void
    {
        Edition::currentEdition()->update(['is_current' => false]);
        Edition::find($editionId)->update(['is_current' => $state]);
    }
}