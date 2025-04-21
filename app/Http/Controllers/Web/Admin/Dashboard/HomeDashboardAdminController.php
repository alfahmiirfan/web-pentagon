<?php

namespace App\Http\Controllers\Web\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class HomeDashboardAdminController extends Controller
{
    public function view(): View
    {
        return view('pages.admin.dashboard.home');
    }
}
