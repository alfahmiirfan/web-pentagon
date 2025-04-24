<?php

namespace App\Http\Controllers\Web\Admin\Activity;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Models\Activity;

class EditActivityAdminController extends Controller
{
    /**
     * @param \App\Models\Activity $activity
     * 
     * @return View
     */
    public function view(Activity $activity): View
    {
        return view('pages.admin.activity.edit', compact([
            'activity'
        ]));
    }
}
