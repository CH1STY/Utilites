<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{


    public function editView(Request $request)
    {
        $user = User::where('id',$request->session()->get('userid'))->first();

        return view('user.edit')->with('user', $user);
    }

    public function update(Request $request)
    {

            $user =User::find($request->session()->get('userid'));
            $user->username= $request->username;
            //$user->password= $request->password;
           // $user->email= $request->email;
            $user->first_name= $request->first_name;
            $user->last_name= $request->last_name;
            $user->gender= $request->gender;
            $user->address= $request->address;
            $user->phone= $request->phone;
            // $user->usertype = $request->usertype;
            $user->national_id = $request->national_id;
            $user->date_of_birth = $request->date_of_birth;
            $user->save();
            
            $request->session()->flash('msg', 'update is successful! Please login...');
            return redirect()->route('login');
        
    }
}
