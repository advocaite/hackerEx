<?php
namespace App\Traits;

use App\Models\hardware;
use DB;
use Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\Paginator;
use DateTime;
use Illuminate\Http\Request;

trait FinancesTrait
{
    public function totalMoney($uid = null)
{
    if(is_null($uid)){
        $uid = auth()->id(); // Get the authenticated user's ID
    }

    $total = DB::table('bankAccounts')
        ->where('bankUser', $uid)
        ->sum('cash');

    return $total;
}
}
