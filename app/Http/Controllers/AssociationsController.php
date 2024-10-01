<?php

namespace App\Http\Controllers;

use App\Models\Association;
use Illuminate\Contracts\View\View;

class AssociationsController
{
    public function __invoke(): View
    {
        return view('associations.index', ['associations' => Association::limit(10)->get()]);
    }
}