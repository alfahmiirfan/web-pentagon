<?php

namespace App\Http\Controllers\Web\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class LoginController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        return view('pages.authentication.login');
    }
}
