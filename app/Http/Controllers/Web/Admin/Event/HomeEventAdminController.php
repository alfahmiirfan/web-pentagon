<?php

namespace App\Http\Controllers\Web\Admin\Event;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Models\Event;

class HomeEventAdminController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        $data = Event::orderByDesc('date')->latest()->get();

        return view('pages.admin.event.home', compact([
            'data'
        ]));
    }
}
