<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ValidationController extends Controller
{
    public function login()
    {
        if (Auth::check())
        {
            return redirect('dashboard');
        }
        else
        {
            return view('validation.index',[
                'title' => 'Silahkan Login'
            ]);
        }
    }

    public function action(Request $request)
    {
        $data  = [
            'username' => $request->input('username'),
            'password' => $request->input('password'),
        ];
        if (Auth::attempt($data))
        {
            return redirect('dashboard');
        }
        return back()->with('gagal', 'email atau password salah');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
