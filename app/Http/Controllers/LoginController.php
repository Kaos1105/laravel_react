<?php

namespace App\Http\Controllers;

use App\Enums\SystemUser\LockCountEnum;
use App\Enums\SystemUser\LockFlagEnum;
use App\Http\Requests\Auth\LoginUserRequest;
use App\Http\TransferObjects\Auth\LoginData;
use App\Models\SystemUser;
use App\Providers\RouteServiceProvider;
use App\Services\Auth\AuthService;
use App\Services\Auth\IAuthService;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;
use Inertia\Response;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class LoginController extends Controller
{
    private IAuthService $authService;

    public function __construct(IAuthService $authService)
    {
        $this->authService = $authService;
    }
    /**
     * Display the login view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Login', []);
    }

    /**
     * Handle an incoming authentication request.
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(LoginUserRequest $request): RedirectResponse
    {
        $request->authenticate();

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
