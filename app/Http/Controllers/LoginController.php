<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)
            ->where('password', $request->password)->first();

        if ($user) {
            $request->session()->put('username', $user->username );
            $request->session()->put('userid', $user->id );

            return redirect()->route('dashboard');
            
        } else {
            $request->session()->flash('loginFailed', '1');
            return redirect()->route('login');
        }
    }
}
