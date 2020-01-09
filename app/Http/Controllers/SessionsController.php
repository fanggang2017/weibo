<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', [
            'only' => ['create']
        ]);
    }

    //
    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $credentials = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials, $request->has('remember'))) {
            session()->flash('success', 'Welcome back!');
            $fallback = route('users.show', Auth::user());
            return redirect()->intended($fallback);
        } else {
            session()->flash('danger', 'Sorry, email and password don\'t match.');
            return redirect()->back()->withInput();
        }
    }

    public function destory()
    {
        Auth::logout();
        session()->flash('success', 'Logout successfully.');
        return redirect('login');
    }
}
