<?php
namespace App\Traits;

use App\Models\hardware;
use DB;
use Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\Paginator;
use DateTime;
use Illuminate\Http\Request;
trait RankingTrait
{

    public function getPlayerData()
{
    $id = auth()->id(); // Get the authenticated user's ID

    // Get the user's gameIP and gamePass
    $user = DB::table('users')
        ->select('gameIP', 'gamePass')
        ->where('id', $id)
        ->first();

    // Get the uptime
    $uptimeInSeconds = DB::table('users_stats')
        ->selectRaw('TIMESTAMPDIFF(SECOND, lastIpReset, NOW()) AS uptime')
        ->where('uid', $id)
        ->value('uptime');

    $reset = new DateTime('now');
    $reset->modify('-'.$uptimeInSeconds.' seconds');
    $now = new DateTime('now');
    $diff = $now->diff($reset);

    $str = '';

    if($diff->d > 0){
        $str = sprintf(ngettext("%d day", "%d days", $diff->d), $diff->d);
        if($diff->h != 0 || $diff->i != 0){
            $str .= ' '._('and').' ';
        }
    }

    if($diff->h > 0){
        $str .= sprintf(ngettext("%d hour", "%d hours", $diff->h), $diff->h);
    } else if($diff->i > 0){
        $str .= sprintf(ngettext("%d minute", "%d minutes", $diff->i), $diff->i);
    }

    // Combine the data
   $data = array();

    $data['ip'] = long2ip($user->gameIP);
    $data['pass'] = $user->gamePass;
    $data['up'] = $str;
    $data['chg'] = _('change');

    return $data;
}

    public function displayRanking($display)
    {
        $table = 'ranking_';

        switch ($display) {
            case 'user':
                $table .= 'user';
                $page = 'page';
                $view = 'sections.ranking.ranking-user';
                $rankData = $this->createRankUsers();
                break;
            case 'clan':
                $table .= 'clan';
                $page = 'show=clan&page';
                 $view = 'sections.ranking.ranking-clan';
                 $rankData = $this->createRankClans();
                break;
            case 'software':
                $table .= 'software';
                $page = request()->has('orderby') ? 'show=software&orderby=' . request('orderby') . '&page' : 'show=software&page';
                $view = 'sections.ranking.ranking-software';
                $rankData = $this->createRankSoft(request());
                break;
            case 'ddos':
                $table .= 'ddos';
                $page = 'show=ddos&page';
                 $view = 'sections.ranking.ranking-ddos';
                 $rankData = DB::table($table)->paginate(15);
                break;
            default:
                abort(404);
                break;
        }

       // Fetch the data from the database


        if ($rankData->count() > 0) {
            return view($view, compact('rankData'));
        } else {
            return view('sections.ranking.ranking-update');
        }

    }

    public function createRankSoft(Request $request)
{
    $joinStr = ' INNER JOIN software_research ON ranking_software.softID = software_research.softID';
    $orderStr = '';

    $extArray = ['crc', 'hash', 'psc', 'fwl', 'hdr', 'skr', 'av', 'vspam', 'vwarez', 'vdoos', 'vcol', 'vbrk', 'exp', 'nmap', 'ana', 'doom'];

    if ($request->has('orderby') && in_array($request->orderby, $extArray)) {
        $extID = $this->ext2int($request->orderby);
        $orderStr = ' WHERE software_research.softwareType = '.$extID.' ';
        $joinStr = ' INNER JOIN software_research ON ranking_software.softID = software_research.softID WHERE software_research.softwareType = '.$extID.' ';
    }

    $query = DB::table('ranking_software')
        ->join('software', 'ranking_software.softID', '=', 'software.id')
        ->selectRaw('ranking_software.softID, software.softname, software.userID, software.softType, software.softversion')
        ->orderBy('ranking_software.id', 'asc');

    if (!empty($orderStr)) {
        $query = $query->whereRaw($orderStr);
    }

    $rankData = $query->paginate(100);

    return $rankData;
}



    public function createRankDDoS()
    {
        $rankData = DB::table('ranking_ddos')
            ->join('round_ddos', 'ranking_ddos.ddosID', '=', 'round_ddos.id')
            ->join('users', 'users.id', '=', 'round_ddos.attID')
            ->orderBy('ranking_ddos.rank', 'asc')
            ->select('round_ddos.attID', 'users.login as attUser', 'round_ddos.vicID', 'round_ddos.power', 'round_ddos.servers')
            ->paginate(10);

        return $rankData;
    }
    public function createRankClans()
    {
            $rankData = DB::table('ranking_clan')
                ->join('clan', 'ranking_clan.clanID', '=', 'clan.clanID')
                ->join('clan_stats', 'clan_stats.cid', '=', 'clan.clanID')
                ->leftJoin('clan_war', function ($join) {
                    $join->on('clan_war.clanID1', '=', 'clan.clanID')
                        ->orOn('clan_war.clanID2', '=', 'clan.clanID');
                })
                ->where('ranking_clan.rank', '>', 0)
                ->orderBy('ranking_clan.rank', 'asc')
                ->select('ranking_clan.clanID', 'clan.name', 'clan.nick', 'clan.slotsUsed', 'clan.power', 'clan_war.clanID1', 'clan_stats.won', 'clan_stats.lost')
                ->paginate(100);

            return $rankData;
    }

    public function createRankUsers()
    {
        $rankData = DB::table('ranking_user')
            ->join('users', 'ranking_user.userID', '=', 'users.id')
            ->join('users_stats', 'ranking_user.userID', '=', 'users_stats.uid')
            ->leftJoin('users_online', 'ranking_user.userID', '=', 'users_online.id')
            ->leftJoin('users_premium', 'ranking_user.userID', '=', 'users_premium.id')
            ->leftJoin('clan_users', 'ranking_user.userID', '=', 'clan_users.userID')
            ->leftJoin('clan', 'clan.clanID', '=', 'clan_users.clanID')
            ->where('ranking_user.rank', '>=', 0)
            ->orderBy('ranking_user.rank', 'asc')
            ->select('ranking_user.userID', 'clan_users.clanID', 'users.login', 'users_premium.id as premium', 'users_online.id as online', 'users_stats.exp', 'clan.nick', 'clan.name', DB::raw('(SELECT COUNT(*) FROM lists WHERE lists.userID = ranking_user.userID) AS hackedDB'))
            ->paginate(100);

        return $rankData;
    }

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
