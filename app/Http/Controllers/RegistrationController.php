<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('registration.index');
    }


    public function store(Request $request)
    {

        if ($request->hasFile('myfile')) {
            $file = $request->file('myfile');

            $filename = time() . "." . $file->getClientOriginalExtension();

            
            $user = new User();
            $user->username= $request->username;
            $user->password= $request->password;
            $user->email= $request->email;
            $user->first_name= $request->first_name;
            $user->last_name= $request->last_name;
            $user->gender= $request->gender;
            $user->address= $request->address;
            $user->phone= $request->phone;
            $user->usertype = $request->usertype;
            $user->national_id = $request->national_id;
            $user->date_of_birth = $request->date_of_birth;
            $user->image  = $filename;
            $user->save();
            $file->move('assets/images/users/', 'user'.$user->id.'.jpg');

            $request->session()->flash('msg', 'Registration is successful! Please login...');
            return redirect()->route('login');
        }
    }

    public function updateImage(Request $request){
        if ($request->image)
        {
            $file = $request->file('image');
            // $filename = time() . "." . $file->getClientOriginalExtension();

            $file->move('assets/images/users/', 'user'.$request->session()->get('userid').'.jpg');

            return Back();

        }  
        else{
            return Back();
        } 
    }
}
