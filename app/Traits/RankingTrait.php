<?php
namespace App\Traits;

use App\Models\hardware;
use DB;
use Auth;
use Illuminate\Support\Facades\Session;
use DateTime;

trait RankingTrait
{
    public function getTopUsers()
    {
        $users = DB::table('ranking_user')
            ->join('users', 'ranking_user.userID', '=', 'users.id')
            ->leftJoin('cache', 'ranking_user.userID', '=', 'cache.userID')
            ->where('rank', '>', -1)
            ->orderBy('ranking_user.rank', 'asc')
            ->limit(7)
            ->get(['ranking_user.userID', 'users.login', 'cache.reputation']);

        return $users;
    }

    public function updateTimePlayed()
    {
        $now = new DateTime('now');

        // Check if LAST_CHECK session variable exists
        if (Session::has('LAST_CHECK')) {
            $lastCheck = Session::get('LAST_CHECK');
            $diff = $now->diff($lastCheck);

            $timePlayed = ($diff->i * 60) + $diff->s;
            $corrTime = round(($timePlayed / 60), 1);

            // Update timePlaying in users_stats table
            DB::table('users_stats')
                ->where('uid', session('id'))
                ->increment('timePlaying', $corrTime);
        }
    }
}
