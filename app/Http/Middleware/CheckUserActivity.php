<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use DateTime;
use Illuminate\Support\Facades\Session;
use App\Traits\RankingTrait;

class CheckUserActivity
{
    use RankingTrait;
    /**
     *
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $curDate = new DateTime('now');
        $curDate->modify('-5 minutes');

        // Check if LAST_CHECK session variable exists
        if (Session::has('LAST_CHECK')) {
            $lastCheck = Session::get('LAST_CHECK');
            $checkDiff = $curDate->diff($lastCheck);

            if ($checkDiff->invert == 1 && $checkDiff->i < 2) {
                // Update user activity
                $this->updateTimePlayed();
            } else {
                return $next($request);
            }
        }

        // Update LAST_CHECK session variable
        Session::put('LAST_CHECK', new DateTime('now'));

        return $next($request);
    }
}
