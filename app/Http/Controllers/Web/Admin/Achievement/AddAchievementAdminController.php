<?php

namespace App\Http\Controllers\Web\Admin\Achievement;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class AddAchievementAdminController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        return view('pages.admin.achievement.add');
    }
}
