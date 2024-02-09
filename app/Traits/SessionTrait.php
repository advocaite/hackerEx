<?php
namespace App\Traits;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

trait SessionTrait
{


    public function addMsg($msg, $type)
    {
        session(['MSG' => $msg, 'MSG_TYPE' => $type]);
    }

    public function issetMsg()
    {
        $value = session('MSG');
        if (isset($value)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function returnMsg(Request $request, $prv = '')
    {

        if (session('MSG_TYPE') == 'error') {
            $type = 'error';
            $prvMsg = '<strong>' . _('Error') . '!</strong> ';
        } else {
            $type = 'success';
            $prvMsg = '<strong>' . _('Success') . '!</strong> ';
        }

        if ($prv != '') {
            $prvMsg = '';
        }

        ?>
        <div class="alert alert-<?php echo $type; ?>">
            <button class="close" data-dismiss="alert">×</button>
            <?php echo $prvMsg . session('MSG'); ?>
        </div>
        <?php

        if (session('MSG_TYPE') == 'mission') {
            ?>
            <span id="notify-mission"></span>
            <?php
        }
        $request->session()->forget(['MSG', 'MSG_TYPE']);

    }

    public function delMsg(Request $request)
    {

        $request->session()->forget(['MSG', 'MSG_TYPE']);

    }

    public function loginSession($id, $user, $premium, $special)
    {
        session(['id' => $id, 'user' => $user, 'premium' => $premium]);
    }

}
