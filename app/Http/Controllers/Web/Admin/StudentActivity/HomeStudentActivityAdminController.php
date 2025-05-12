<?php

namespace App\Http\Controllers\Web\Admin\StudentActivity;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Models\StudentActivity;

class HomeStudentActivityAdminController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        $data = StudentActivity::latest()->get();

        return view('pages.admin.student-activity.home', compact([
            'data'
        ]));
    }
}
