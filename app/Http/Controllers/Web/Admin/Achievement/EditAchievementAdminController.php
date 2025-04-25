<?php

namespace App\Http\Controllers\Web\Admin\Achievement;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Models\Achievement;

class EditAchievementAdminController extends Controller
{
    /**
     * @param \App\Models\Achievement $achievement
     * 
     * @return View
     */
    public function view(Achievement $achievement): View
    {
        return view('pages.admin.achievement.edit', compact([
            'achievement'
        ]));
    }
}
