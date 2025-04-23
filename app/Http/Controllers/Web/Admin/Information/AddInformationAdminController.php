<?php

namespace App\Http\Controllers\Web\Admin\Information;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class AddInformationAdminController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        return view('pages.admin.information.add');
    }
}
