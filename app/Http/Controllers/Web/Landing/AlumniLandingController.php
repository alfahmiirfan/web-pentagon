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
     * @param \App\Models\Alumni $alumni
     * 
     * @return View
     */
    public function detail(Alumni $alumni): View
    {
        return view('pages.landing.alumni.detail', compact([
            'alumni'
        ]));
    }
}
