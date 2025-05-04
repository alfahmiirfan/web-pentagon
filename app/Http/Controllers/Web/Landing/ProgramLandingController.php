<?php

namespace App\Http\Controllers\Web\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class ProgramLandingController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        return view('pages.landing.program');
    }
}
