<?php

namespace App\Http\Controllers\Web\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Models\Alumni;

class AlumniLandingController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        $alumni = Alumni::orderByDesc('year')->latest()->get();

        return view('pages.landing.alumni.home', compact([
            'alumni'
        ]));
    }

    /**
     * @return View
     */
    public function detail(): View
    {
        return view('pages.landing.alumni.detail');
    }
}
