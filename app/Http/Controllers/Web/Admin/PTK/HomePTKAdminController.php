<?php

namespace App\Http\Controllers\Web\Admin\PTK;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Models\PTK;

class HomePTKAdminController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        $data = PTK::latest()->get();

        return view('pages.admin.ptk.home', compact([
            'data'
        ]));
    }
}
