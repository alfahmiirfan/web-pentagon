<?php

namespace App\Http\Controllers\Web\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Models\Achievement;
use App\Models\Information;
use App\Models\Activity;
use App\Models\Facility;
use App\Models\Alumni;
use App\Models\PTK;

class HomeDashboardAdminController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        $informations = Information::orderByDesc('date')->latest()->get();
        $achievements = Achievement::orderByDesc('date')->latest()->get();
        $activities = Activity::get();
        $facilities = Facility::get();
        $alumnis = Alumni::get();
        $ptks = PTK::get();

        return view('pages.admin.dashboard.home', compact([
            'informations',
            'achievements',
            'activities',
            'facilities',
            'alumnis',
            'ptks',
        ]));
    }
}
