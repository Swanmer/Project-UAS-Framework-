<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin',['except'=>'logout']);
    }

    public function formLogin()
    {
        return view('auth.login-admin');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:petugas',
            'nama_petugas' => 'required|string|max:255',
            'level' => 'required|string|in:admin,superadmin',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $petugas = Petugas::create([
            'username' => $request->username,
            'nama_petugas' => $request->nama_petugas,
            'level' => $request->level,
            'password' => Hash::make($request->password),
        ]);

        Auth::guard('admin')->login($petugas);

        return redirect()->route('admin.dashboard');
    }

    public function login(Request $request)
    {
        $cred = $request->validate([
            'username'=>'required|exists:petugas',
            'password'=>'required'
        ]);
          

        if (Auth::guard('admin')->attempt($cred, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->intended('admin');
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
