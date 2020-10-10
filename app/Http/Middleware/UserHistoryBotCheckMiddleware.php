<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class UserHistoryBotCheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth()->user();
        if (is_null($user)) {
            return $next($request);
        }
        if (){
            $user['status'] = User::USER_STATUSES['Blocked'];
            $user->save();
        }
        return $next($request);
    }
}
