<?php

namespace App\Http\Controllers;

use App\Models\Edition;
use Illuminate\Contracts\View\View;

class IncomingEditionController
{
    public function __invoke(): View
    {
        return view('events.show', ['edition' => Edition::incomingEdition()->first()]);
    }
}