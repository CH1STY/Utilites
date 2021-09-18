<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
    
    public function index(Request $request)
    {
        $user = User::where('id',$request->session()->get('userid'))->first();
        return view('dashboard.index')->with('user',$user);
    }


}
