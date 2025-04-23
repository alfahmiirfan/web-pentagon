<?php

namespace App\Http\Controllers\Web\Admin\Facility;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class AddFacilityAdminController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        return view('pages.admin.facility.add');
    }
}
