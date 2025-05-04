<?php

namespace App\Http\Controllers\Web\Admin\Achievement;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Models\Achievement;

class HomeAchievementAdminController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        $data = Achievement::orderByDesc('date')->latest()->get();

        return view('pages.admin.achievement.home', compact([
            'data'
        ]));
    }
}
