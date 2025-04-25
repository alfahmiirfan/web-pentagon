<?php

namespace App\Http\Controllers\Web\Admin\Information;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Models\Information;

class EditInformationAdminController extends Controller
{
    /**
     * @param \App\Models\Information $information
     * 
     * @return View
     */
    public function view(Information $information): View
    {
        return view('pages.admin.information.edit', compact([
            'information'
        ]));
    }
}
