<?php
namespace App\Traits;

use App\Models\hardware;
use DB;
use Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\Paginator;
use DateTime;
use Illuminate\Http\Request;
use App\Traits\PlayerTrait;
trait ProcessTrait
{
    use PlayerTrait;
    private function getHostID($host){

        $return = '0';
        if($host == 'local'){
            $return = '1';
        }

        return $return;

    }

    public function pNumericAction($pAction)
    {
        return config('game.processActions.' . $pAction);
    }

    public function issetProcess($userID, $pAction, $victimID, $host, $pSoftID, $pInfo)
    {
        if($this->verifyID($userID)){

            $host = $this->getHostID($host);
            $pNumericAction = $this->pNumericAction($pAction);

            $query = DB::table('processes')
                ->where('pCreatorID', $userID)
                ->where('pVictimID', $victimID)
                ->where('pAction', $pNumericAction)
                ->where('pSoftID', $pSoftID)
                ->where('pLocal', $host);

            if($pAction != 'RESET_IP' && $pAction != 'RESET_PWD' && $pAction != 'E_LOG'){
                $query = $query->where('pInfo', $pInfo);
            }

            $data = $query->first();

            return !is_null($data);
        }

        return false;
    }


}
