<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\UserSession;
use App\Native\Repositories\UserSessionRepository;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Ramsey\Uuid\Uuid;


class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('dashboard.pages.public.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        // dd($request->all());
        $request->authenticate();
        // $request->session()->regenerate();
        $newSession = new UserSession();
        $newSession->token = str_replace('-', '__s__', Uuid::uuid4());
        $newSession->user_token = Auth::user()->token;
        $newSession->ip = $request->ip();
        $newSession->user_agent = $request->header('user-agent');
        $newSession->save();

        // to do - get all permissions of the user
        $permissions = [];
        // Pre set data in session to use in AppRequired
        Session::put('sessionToken', $newSession->token);
        Session::put('userToken', Auth::user()->token);
        Session::put('userKind', Auth::user()->kind);
        Session::put('permissions', $permissions);

        if(Auth::user()->kind == 'Official') {
            return redirect()->to('dashboard');
        }

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        UserSession::where('token', $request->session()->get('sessionToken'))->first()->delete();
        
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
