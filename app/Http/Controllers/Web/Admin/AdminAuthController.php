<?php

namespace App\Http\Controllers\Web\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Admin\AdminLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AdminAuthController extends Controller
{
     
    public function show()
    {
        if (!Auth::guard('admin')->guest()) {
            return redirect(env('ADMIN_PANEL') ??  '');
        }
        return view('admin.auth.login');
    }
    
    public function login(AdminLoginRequest $request)
    {
        $userCrendential = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (!Auth::guard('admin')->attempt($userCrendential,$request->remember)) {
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }
        $request->session()->regenerate();

        return redirect()->intended(env('ADMIN_PANEL'));
        
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}