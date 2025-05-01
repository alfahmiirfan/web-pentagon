<?php

namespace App\Http\Controllers\Web\Authentication;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
    /**
     * @return RedirectResponse
     */
    public function action(): RedirectResponse
    {
        if (Auth::check()) {
            Auth::logout();
        }

        return redirect()
            ->route(config('route.auth.login'))
            ->with('success', 'Berhasil keluar');
    }
}
