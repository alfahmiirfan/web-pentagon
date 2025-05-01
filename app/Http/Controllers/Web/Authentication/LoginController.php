<?php

namespace App\Http\Controllers\Web\Authentication;

use App\Http\Requests\Web\Authentication\LoginReq;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * @return View
     */
    public function view(): View
    {
        return view('pages.authentication.login');
    }

    /**
     * @param \App\Http\Requests\Web\Authentication\LoginReq $request
     * 
     * @return RedirectResponse
     */
    public function action(LoginReq $request): RedirectResponse
    {
        [
            'password' => $passwordReq,
            'email' => $emailReq,
        ] = $request;

        $user = User::firstWhere('email', $emailReq);

        if ($user === null || !Hash::check($passwordReq, $user?->password ?? '')) {
            return back()->withInput()
                ->withErrors([
                    'error' => 'Email atau Kata sandi salah',
                ]);
        }

        Auth::login($user);

        return redirect()
            ->route(config('route.admin.dashboard.home'))
            ->with('success', 'Selamat Datang');
    }
}
