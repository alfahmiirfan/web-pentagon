<?php

namespace App\Http\Controllers\Web\Admin\Event;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Models\Event;

class EditEventAdminController extends Controller
{
    /**
     * @param \App\Models\Event $event
     * 
     * @return View
     */
    public function view(Event $event): View
    {
        return view('pages.admin.event.edit', compact([
            'event'
        ]));
    }
}
