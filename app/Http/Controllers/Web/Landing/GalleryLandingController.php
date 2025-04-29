<?php

namespace App\Http\Controllers\Web\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Models\Activity;
use App\Models\Facility;

class GalleryLandingController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        $activities = Activity::latest()->get();
        $facilities = Facility::latest()->get();

        return view('pages.landing.gallery', compact([
            'activities',
            'facilities',
        ]));
    }
}
