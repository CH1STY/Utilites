<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\VolunteerInformation;

class VolunteerController extends Controller
{
    public function update(Request $request)
    {
        $volunteer = VolunteerInformation::where('userid',$request->session()->get('userid'))->first();
        $volunteer->worktype= $request->worktype;
        $volunteer->work_area= $request->work_area;
        $volunteer->latitude= $request->latitude;
        $volunteer->availablity= $request->availablity;
        $volunteer->longitude = $request->longitude;

        if($volunteer->save()){
            $request->session()->flash('msg','Information Update Successfully');
        }

        return Back();

    }
}
