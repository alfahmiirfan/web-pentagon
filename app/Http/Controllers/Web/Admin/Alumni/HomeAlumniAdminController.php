<?php

namespace App\Http\Controllers\Web\Admin\Alumni;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Models\Alumni;

class HomeAlumniAdminController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        $data = Alumni::latest()->get();

        return view('pages.admin.alumni.home', compact([
            'data'
        ]));
    }
}
