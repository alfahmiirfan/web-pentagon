<?php

namespace App\Http\Controllers\Web\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Models\PTK;

class PTKLandingController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        $ptks = PTK::latest()->get();

        return view('pages.landing.ptk.home', compact([
            'ptks'
        ]));
    }

    /**
     * @return View
     */
    public function detail(): View
    {
        return view('pages.landing.ptk.detail');
    }
}
