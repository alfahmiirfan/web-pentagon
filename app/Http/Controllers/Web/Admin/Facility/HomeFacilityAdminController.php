<?php

namespace App\Http\Controllers\Web\Admin\Facility;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Models\Facility;

class HomeFacilityAdminController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        $data = Facility::latest()->get();

        return view('pages.admin.facility.home', compact([
            'data'
        ]));
    }
}
