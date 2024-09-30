<?php

namespace App\Http\Controllers;

use App\Models\Edition;
use Illuminate\Contracts\View\View;

class CurrentEditionController
{
    public function __invoke(): View
    {
        return view('events.show', ['edition' => Edition::currentEdition()->first()]);
    }
}