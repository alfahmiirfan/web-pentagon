<?php

namespace App\Http\Controllers\Web\Admin\PTK;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Models\PTK;

class EditPTKAdminController extends Controller
{
    /**
     * @param \App\Models\PTK $ptk
     * 
     * @return View
     */
    public function view(PTK $ptk): View
    {
        return view('pages.admin.ptk.edit', compact([
            'ptk'
        ]));
    }
}
