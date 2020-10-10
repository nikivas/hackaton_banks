<?php

namespace App\Http\Middleware;

use App\Models\UserHistory;
use Closure;
use Illuminate\Http\Request;

class UserHistoryWriteMiddleware
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
        if (!is_null($user)) {
            try {
                UserHistory::create([
                    'route' => $request->path(),
                    'user_id' => $user['id'],
                ]);
            } catch (\Throwable $e) {
                return $next($request);
            }
        }
        return $next($request);
    }
}
