<?php

namespace App\Http\Controllers\Web\Admin\Activity;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class AddActivityAdminController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        return view('pages.admin.activity.add');
    }
}
