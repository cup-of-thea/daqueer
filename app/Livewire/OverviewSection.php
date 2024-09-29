<?php

namespace App\Livewire;

use App\Models\Edition;
use Livewire\Attributes\Computed;
use Livewire\Component;

class OverviewSection extends Component
{
    #[Computed]
    public function edition(): ?Edition
    {
        return Edition::incomingEdition()->first();
    }
}
