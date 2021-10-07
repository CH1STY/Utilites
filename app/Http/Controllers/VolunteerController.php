<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\VolunteerInformation;

class VolunteerController extends Controller
{
    public function view(Request $request)
    {
        $user = VolunteerInformation::where('userid', $request->session()->get('userid'))->first();

        return view('volunteer.view')->with('user', $user);
    }
    public function update(Request $request)
    {
        $volunteer = VolunteerInformation::where('userid', $request->session()->get('userid'))->first();
        $volunteer->worktype = $request->worktype;
        $volunteer->work_area = $request->work_area;
        $volunteer->latitude = $request->latitude;
        $volunteer->longitude = $request->longitude;
        $volunteer->availablity = $request->availablity;

        if ($volunteer->save()) {
            $request->session()->flash('msg', 'Information Update Successfully');
        }

        return Back();
    }
}
