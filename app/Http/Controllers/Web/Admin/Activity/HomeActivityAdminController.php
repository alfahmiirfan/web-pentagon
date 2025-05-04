<?php

namespace App\Http\Controllers\Web\Admin\Activity;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Models\Activity;

class HomeActivityAdminController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        $data = Activity::latest()->get();

        return view('pages.admin.activity.home', compact([
            'data'
        ]));
    }
}
