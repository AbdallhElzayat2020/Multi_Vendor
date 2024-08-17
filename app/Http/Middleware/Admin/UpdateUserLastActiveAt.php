<?php

namespace App\Http\Middleware\Admin;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UpdateUserLastActiveAt
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        if ($user) {
            $user->forceFill([
                'last_active_at' => Carbon::now(),
//               'last_active_at' => now(),
            ])
            ->save();
        }
        return $next($request);
    }
}
