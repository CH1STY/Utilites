<?php

namespace App\Http\Controllers;

use App\User;
use App\VolunteerInformation;
use Illuminate\Http\Request;
use App\Http\Requests\RegRequest;
use App\Http\Requests\PhotoeditRequest;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('registration.index');
    }


    public function store(RegRequest $request)
    {

        if ($request->hasFile('myfile')) {
            $file = $request->file('myfile');

            $filename = time() . "." . $file->getClientOriginalExtension();


            $user = new User();
            $user->username = $request->username;
            $user->password = $request->password;
            $user->email = $request->email;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->gender = $request->gender;
            $user->address = $request->address;
            $user->phone = $request->phone;
            $user->usertype = $request->usertype;
            if ($user->usertype == "Volunteer") {
                $voluterInfo = new VolunteerInformation();
                $voluterInfo->work_area = "Not Given";
                $voluterInfo->worktype = "Not Given";
                $voluterInfo->latitude = "0.0";
                $voluterInfo->longitude = "0.0";
                $voluterInfo->availablity = "off";
            }


            $user->national_id = $request->national_id;
            $user->date_of_birth = $request->date_of_birth;
            $user->image  = "x";
            if ($user->save()) {
                $user->image = "user" . $user->id . ".jpg";
                $user->save();
                if ($user->usertype == "Volunteer") {

                    $voluterInfo->userid = $user->id;
                    $voluterInfo->save();
                }
                $file->move('assets/images/users/', 'user' . $user->id . '.jpg');
                $request->session()->flash('msg', 'Registration is successful! Please login...');
                return redirect()->route('login');

                foreach ($request as &$data) {
                    $data->direction = 0;
                }
            }
            return Back();
        }
    }

    public function updateImage(PhotoeditRequest $request)
    {
        if ($request->image) {
            $file = $request->file('image');
            // $filename = time() . "." . $file->getClientOriginalExtension();

            $file->move('assets/images/users/', 'user' . $request->session()->get('userid') . '.jpg');

            return Back();
        } else {
            return Back();
        }
    }
}
