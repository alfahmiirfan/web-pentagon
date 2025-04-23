<?php

namespace App\Http\Controllers\Web\Admin\Facility;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class HomeFacilityAdminController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        return view('pages.admin.facility.home');
    }
}
