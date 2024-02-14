<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Traits\ProcessTrait;
use App\Traits\PlayerTrait;
use App\Traits\FinancesTrait;
class AjaxController extends Controller
{
use PlayerTrait;
use ProcessTrait;
use FinancesTrait;
    public function getStatic()
{
    $id = auth()->id(); // Get the authenticated user's ID

    // Get the user's gameIP, login, reputation, and rank
    $staticInfo = DB::table('users')
        ->leftJoin('cache', 'cache.userID', '=', 'users.id')
        ->leftJoin('ranking_user', 'ranking_user.userID', '=', 'users.id')
        ->select('gameIP', 'login', 'cache.reputation', 'ranking_user.rank')
        ->where('users.id', $id)
        ->first();

    $return = [
        [
            "ip" => long2ip($staticInfo->gameIP),
            "user" => $staticInfo->login,
            "reputation" => number_format($staticInfo->reputation),
            "rank" => number_format($staticInfo->rank),
            "rep_title" => _('Reputation'),
            "rank_title" => _('Ranking')
        ]
    ];

    return response()->json($return);
}

public function getCommon()
{
    // You need to replace the following lines with the actual logic
    $online = 12;//$this->countLoggedInUsers();
    $unread = 3;//$this->countUnreadMails();
    $finances = 23456;//$this->totalMoney();

    $mission_complete = 0;
    /*if ($this->issetMissionSession()) {
        if ($this->missionStatus(session('MISSION_ID')) == 3) {
            $mission_complete = 1;
        }
    }*/

    $common = [
        "online" => $online,
        "unread" => $unread,
        "mission_complete" => $mission_complete,
        "finances" => number_format($finances),
        "unread_title" => sprintf(ngettext('Unread message.', 'Unread messages.', $unread), $unread),
        "unread_text" => sprintf(ngettext('You have %d unread message.', 'You have %d unread messages.', $unread), $unread),
        "online_title" => sprintf(_('%d online players'), $online),
        "finances_title" => _('Finances')
    ];

    return response()->json([$common]);
}

public function getPwdInfo()
{
    $id = auth()->id(); // Get the authenticated user's ID

    $btn = '';
    $select2 = False;

    $title = _('Change password');

    if(!$this->issetProcess($id, 'RESET_PWD', '', 'local', '', '', '')){

        $btn = '<input id="modal-submit" type="submit" class="btn btn-primary" value="'._('Change').'" DISABLED><a data-dismiss="modal" class="btn" href="#">'._('Cancel').'</a>';

        $pwdInfo = $this->pwd_info();

        if($pwdInfo['PRICE'] > 0){

            $text = sprintf(_('You can wait %s<strong>%s</strong></span> for your next free reset or pay <strong>$%s</strong> for our charged password reset service.'), '<span class="red">', $pwdInfo['NEXT_RESET'], number_format($pwdInfo['PRICE']));
            $text .= '</br></br>';
            if($this->totalMoney() >= $pwdInfo['PRICE']){

                $text .= '<div id="loading"><img src="images/ajax-money.gif">'._('Please wait').'</div><input type="hidden" id="accSelect" value=""><span id="desc-money"></span>';

                $select2 = True;

            } else {
                $btn = '<a data-dismiss="modal" class="btn" href="#">'._('Cancel').'</a>';
                $text .= _('You do not have enough money.');
            }

        } else {
            $text = _('You can reset your password now <b>for free!</b>');
            $btn = '<input id="modal-submit" type="submit" class="btn btn-primary" value="'._('Change').'"><a data-dismiss="modal" class="btn" href="#">'._('Cancel').'</a>';
        }

    } else {
        $text = sprintf(_('There already is a password change in process. Refeer to the %sTask Manager%s.'), '<a href="processes">', '</a>');
    }

    $result = [
        "title" => $title,
        "text" => $text,
        "btn" => $btn,
        "select2" => $select2
    ];

    return response()->json($result);
}



}
