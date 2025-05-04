<?php

namespace App\Http\Controllers\Web\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Models\Information;

class HomeLandingController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        $informations = Information::whereNotNull('number')->orderBy('number')->get();

        return view('pages.landing.home', compact([
            'informations'
        ]));
    }
}
