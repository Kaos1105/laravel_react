<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\LoginUserRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;
use Inertia\Response;

class LoginController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Login', []);
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginUserRequest $request): RedirectResponse
    {
        $credential = $request->validated();
        $validator = Validator::make($request->all(), $request->rules());
        if (!User::whereLoginId($credential['login_id'])->exists()) {
            // user not found
            $validator->errors()->add(
               'login_id', trans('errors.login_id_invalid')
            );
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if (!Auth::attempt($credential)) {
            $validator->errors()->add(
                'login_id', trans('errors.unauthenticated')
            );
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
