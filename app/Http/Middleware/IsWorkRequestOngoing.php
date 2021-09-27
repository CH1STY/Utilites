<?php

namespace App\Http\Middleware;

use Closure;
use App\WorkRequest;

class IsWorkRequestOngoing
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $workRequest = WorkRequest::where('status', "accepted")
            ->orWhere('user_id', $request->session()->get('user_id'))
            ->orWhere('volunteer_id', $request->session()->get('user_id'))
            ->first();

        if ($workRequest) {
            return redirect()->route('work.ongoing',['id'=>$workRequest->id]);
        }
        else
        {
            return $next($request);

        }
    }
}
