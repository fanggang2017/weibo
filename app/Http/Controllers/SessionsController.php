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
            if (Auth::user()->activated) {
                session()->flash('success', 'Welcome back!');
                $fallback = route('users.show', Auth::user());
                return redirect()->intended($fallback);
            } else {
                Auth::logout();
                session()->flash('warning', 'Your account is not activated, please check the registered email in the email box to activate it.');
                return redirect('/');
            }
        } else {
            session()->flash('danger', 'Sorry, email and password don\'t match.');
            return redirect()->back()->withInput();
        }
    }

    public function destroy()
    {
        Auth::logout();
        session()->flash('success', 'Logout successfully.');
        return redirect('login');
    }
}
