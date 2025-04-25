<?php

namespace App\Http\Controllers\Web\Admin\Alumni;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Models\Alumni;

class EditAlumniAdminController extends Controller
{
    /**
     * @param \App\Models\Alumni $alumni
     * 
     * @return View
     */
    public function view(Alumni $alumni): View
    {
        return view('pages.admin.alumni.edit', compact([
            'alumni'
        ]));
    }
}
