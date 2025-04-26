<?php

namespace App\Http\Controllers\Web\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class AchievementLandingController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        return view('pages.landing.achievement.home');
    }

    /**
     * @return View
     */
    public function detail(): View
    {
        return view('pages.landing.achievement.detail');
    }
}
