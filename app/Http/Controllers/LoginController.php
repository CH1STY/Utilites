<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Mail\OTPMail;
use Illuminate\Support\Facades\Mail;
use App\OTP;

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
            $request->session()->put('username', $user->username);
            $request->session()->put('userid', $user->id);

            return redirect()->route('dashboard');
        } else {
            $request->session()->flash('loginFailed', '1');
            return redirect()->route('login');
        }
    }
    public function indexforOTP()
    {
        return view('login.otp');
    }

    public function sendOTP(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $returnValue = "";


        if ($user) {


            $doesOTPExist = OTP::where('userEmail', $request->email)->first();

            if ($doesOTPExist) {
                $currTime = date('Y-m-d H:i:s', time());

                if ($currTime > $doesOTPExist->expired_at) {
                    $doesOTPExist->delete();
                } else {
                    $returnValue = "Wait";
                    return response()->json($returnValue);
                }
            }

            while (true) {
                $otp = rand(100000, 999999);
                $isExist = OTP::where('otp', $otp)->first();
                if ($isExist) {
                    continue;
                } else {
                    $newOTP = new OTP;
                    $newOTP->userEmail = $request->email;
                    $newOTP->otp = $otp;
                    $expiryTime = date("Y-m-d H:i:s", time() + 60);
                    $newOTP->expired_at =  $expiryTime;
                    $newOTP->save();
                    break;
                }
            }



            $details = [
                'title' => "OTP FROM OVMS TO LOGIN",
                'body' => "Volunteering People",
                'otp' => $otp,
            ];


            Mail::to($request->email)->send(new OTPMail($details));



            $returnValue = "Found";
        } else {
            $returnValue = "NotFound";
        }

        return response()->json($returnValue);
    }


    public function verifyOTP(Request $request)
    {
        $isOTPExist = OTP::where('userEmail', $request->email)->where('otp', $request->otp)->first();
        $returnValue = "";
        if ($isOTPExist) {
            $currTime = date('Y-m-d H:i:s', time());

            if ($currTime > $isOTPExist->expired_at) {
                $returnValue = "expired";
                $isOTPExist->delete();
                return response()->json($returnValue);
            } else {

                $user = User::where('email', $request->email)->first();
                $request->session()->put('username', $user->username);
                $request->session()->put('userid', $user->id);
                $returnValue = "Success";
                $isOTPExist->delete();
                return response()->json($returnValue);
            }
        } else {
            $returnValue = "fatalError";
            return response()->json($returnValue);
        }
    }
}
