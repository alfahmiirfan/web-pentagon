<?php

namespace App\Http\Controllers\Web\Admin\Facility;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Models\Facility;

class EditFacilityAdminController extends Controller
{
    /**
     * @param \App\Models\Facility $facility
     * 
     * @return View
     */
    public function view(Facility $facility): View
    {
        return view('pages.admin.facility.edit', compact([
            'facility'
        ]));
    }
}
