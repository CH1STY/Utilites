<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\PasswordChangeRequest;
class UserController extends Controller
{
    public function editView(Request $request)
    {
        $user = User::where('id',$request->session()->get('userid'))->first();

        return view('user.edit')->with('user', $user);
    }

    public function update(ProfileUpdateRequest $request)
    {

            $user =User::find($request->session()->get('userid'));
            $user->username= $request->username;
            $user->first_name= $request->first_name;
            $user->last_name= $request->last_name;
            $user->gender= $request->gender;
            $user->address= $request->address;
            $user->phone= $request->phone;
            $user->date_of_birth = $request->date_of_birth;
            $user->save();
            
            $request->session()->flash('msg', 'update is successful! Please login...');
            return redirect()->route('dashboard');
        
    }
    public function changePassword(PasswordChangeRequest $request)
    {
        $user =User::find($request->session()->get('userid'));
        $user->password=$request->password;
        $user->save();
        $request->session()->flash('msg', 'Password Change Successfull...');
        return back();

    }
}
