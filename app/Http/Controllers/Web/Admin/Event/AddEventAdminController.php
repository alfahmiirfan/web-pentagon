<?php

namespace App\Http\Controllers\Web\Admin\Event;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class AddEventAdminController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        return view('pages.admin.event.add');
    }
}
