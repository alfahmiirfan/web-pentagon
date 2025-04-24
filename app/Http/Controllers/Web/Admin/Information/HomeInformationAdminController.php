<?php

namespace App\Http\Controllers\Web\Admin\Information;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Models\Information;

class HomeInformationAdminController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        $data = Information::orderByDesc('date')->latest()->get();

        return view('pages.admin.information.home', compact([
            'data'
        ]));
    }
}
