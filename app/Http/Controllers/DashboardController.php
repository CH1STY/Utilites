<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\VolunteerInformation;

class DashboardController extends Controller
{
    
    public function index(Request $request)
    {
        $user = User::where('id',$request->session()->get('userid'))->first();
        $volunInfo = VolunteerInformation::where('userid',$request->session()->get('userid'))->first();
        if($volunInfo)
        {
            return view('dashboard.index')->with('user',$user)->with('volun',$volunInfo);
            
        }
        else
        {

            return view('dashboard.index')->with('user',$user);
        }
    }
   

}