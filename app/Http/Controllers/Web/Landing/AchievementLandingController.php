<?php

namespace App\Http\Controllers\Web\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Models\Achievement;

class AchievementLandingController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        $achievements = Achievement::orderByDesc('date')->latest()->get();

        return view('pages.landing.achievement.home', compact([
            'achievements'
        ]));
    }

    /**
     * @return View
     */
    public function detail(Achievement $achievement): View
    {
        return view('pages.landing.achievement.detail', compact([
            'achievement'
        ]));
    }
}
