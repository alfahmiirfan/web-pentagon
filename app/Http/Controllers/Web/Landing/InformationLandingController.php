<?php

namespace App\Http\Controllers\Web\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Models\Information;

class InformationLandingController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        $informations = Information::orderByDesc('date')->latest()->get();

        return view('pages.landing.information.home', compact([
            'informations'
        ]));
    }

    /**
     * @param \App\Models\Information $information
     * 
     * @return View
     */
    public function detail(Information $information): View
    {
        $others = Information::whereKeyNot($information->id)->orderByDesc('date')->latest()->limit(3)->get();

        return view('pages.landing.information.detail', compact([
            'information',
            'others',
        ]));
    }
}
