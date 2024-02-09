<?php
namespace App\Traits;

use App\Models\hardware;
use DB;
use Auth;

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


}
