<?php

namespace App\Http\Controllers\Web\Admin\PTK;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class HomePTKAdminController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        return view('pages.admin.ptk.home');
    }
}
