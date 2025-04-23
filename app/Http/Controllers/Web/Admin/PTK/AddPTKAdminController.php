<?php

namespace App\Http\Controllers\Web\Admin\PTK;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class AddPTKAdminController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        return view('pages.admin.ptk.add');
    }
}
