<?php

namespace App\Livewire;

use Livewire\Component;

class Navigation extends Component
{
    public bool $showMenu = false;

    public function openMenu(): void
    {
        $this->showMenu = true;
    }

    public function closeMenu(): void
    {
        $this->showMenu = false;
    }
}
