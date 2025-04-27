<?php

namespace App\Http\Controllers\Web\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class InformationLandingController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        return view('pages.landing.information.home');
    }

    /**
     * @return View
     */
    public function detail(): View
    {
        return view('pages.landing.information.detail');
    }
}
