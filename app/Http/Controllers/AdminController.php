<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        if (
            $request->email == 'admin@gmail.com' &&
            $request->password == 'admin123'
        ) {

         
            session(['admin' => true]);

            return redirect()->route('admin.dashboard');
        }

        return back()->with(
            'error',
            'Invalid Admin Credentials'
        );
    }

    public function dashboard()
    {
        if (!session('admin')) {
            return redirect()->route('admin.login');
        }

        return view('admin.dashboard');
    }

    public function logout()
{
    session()->forget('admin');

    return redirect()
        ->route('admin.login')
        ->with('success', 'Admin Logged Out');
}
}