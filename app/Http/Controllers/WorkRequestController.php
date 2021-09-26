<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\WorkRequest;
use App\User;
class WorkRequestController extends Controller
{
    public function requestWork(Request $request,$id)
    {

        $user = User::find($id);

        if($user)
        {
            $oldWorkRequest = WorkRequest::where('user_id',$id)->first();

            if($oldWorkRequest)
            {
                $oldWorkRequest->delete();
            }

            $newWorkRequest = new WorkRequest;  
    
            $newWorkRequest->user_id = $id;
            $newWorkRequest->volunteer_id = $request->volunteerId;
            $newWorkRequest->details = "<strong>".$user->username."</strong>"." is Looking to Hire your<br>".$request->details;
            $newWorkRequest->expired_at = date("Y-m-d H:i:s", time() + 60);
            if($newWorkRequest->save())
            {
                return response()->json($newWorkRequest);
            }
            else
            {
                return response()->json("failed");
            }

        }
        else
        {
            return response()->json("failed");
        }

    }


    public function fetchWork(Request $request,$v_id)
    {

        $workRequest = WorkRequest::where('volunteer_id',$v_id)->first();

        if($workRequest)
        {
            return response()->json($workRequest);

        }
        else
        {
            return response()->json(false);
        }
        
    }

    public function removeRequest(Request $request, $id)
    {
        $workRequest = WorkRequest::find($id);

        if($workRequest->delete()){
            return response()->json(true);
        }else{
            return response()->json(false);

        }
    }
    public function isExist(Request $request, $id)
    {
        $workRequest = WorkRequest::find($id);

        if($workRequest){
            return response()->json(true);
        }else{
            return response()->json(false);
        }
    }

    
}