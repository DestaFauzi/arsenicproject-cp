<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showLogin()
    {
        if (Auth::check()) {
            return $this->redirectBasedOnRole();
        }
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $credentials = $request->only('email', 'password');
        $credentials['is_active'] = true; // Hanya user aktif yang bisa login
        $remember = $request->filled('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return $this->redirectBasedOnRole();
        }

        return redirect()->back()
            ->withErrors(['email' => 'Email atau password salah, atau akun tidak aktif.'])
            ->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    private function redirectBasedOnRole()
    {
        $user = Auth::user();
        
        if ($user->isAdmin()) {
            return redirect()->route('dashboard');
        }
        if ($user->isUser()) {
            return redirect()->route('dashboard');
        }
        if ($user->isEditor()) {
            return redirect()->route('dashboard');
        }
        // Default redirect for other roles or if no specific route is defined
        return redirect()->route('dashboard');
    }
    public function dashboard()
    {
    // Mendapatkan role pengguna yang sedang login
    $role = Auth::user()->role;

    // Mengarahkan ke dashboard berdasarkan role
    if ($role === 'admin') {
        return view('acl.admin.dashboard');
    } elseif ($role === 'editor') {
        return view('acl.editor.dashboard');
    } elseif ($role === 'user') {
        return view('acl.user.dashboard');
    }
    else {
        return redirect()->route('login')->withErrors(['error' => 'Unauthorized access']);
    }
    }
}