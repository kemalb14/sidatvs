<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    function index()
    {
        return view('login');
    }

    function doLogin(Request $req)
    {
        $req->validate([
            'uname' => 'required',
            'password' => 'required|min:7',
        ], [
            'uname.required' => 'Username harus diisi',
            'password.required' => 'Password harus diisi',
            'password.min' => 'Password minimal 7 karakter'
        ]);

        if (Auth::guard('admin')->attempt(['username' => $req->uname, 'password' => $req->password])) {
            return redirect()->intended('/admin/dashboard');
        } else if (Auth::guard('kpp')->attempt(['username' => $req->uname, 'password' => $req->password])) {
            return redirect()->intended('/kpp/dashboard');
        } else if (Auth::guard('bpn')->attempt(['username' => $req->uname, 'password' => $req->password])) {
            return redirect()->intended('/bpn/dashboard');
        } else {
            return redirect('/')->with('gagal', 'Username atau password salah');
        }
    }

    function logout()
    {
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        } else if (Auth::guard('kpp')->check()) {
            Auth::guard('kpp')->logout();
        } else if (Auth::guard('bpn')->check()) {
            Auth::guard('bpn')->logout();
        }

        return redirect('/')->with('berhasil', 'Berhasil logout');
    }
}
