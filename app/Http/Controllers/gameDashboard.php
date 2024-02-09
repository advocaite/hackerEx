<?php

namespace App\Http\Controllers;

use App\Models\hardware;
use App\Models\User;
use App\Traits\HardwareTrait;
use App\Traits\RankingTrait;
use Illuminate\Http\Request;
use DOMDocument;
use DOMXPath;
use Illuminate\Support\Facades\Auth;

class gameDashboard extends Controller
{

    use HardwareTrait;
    use RankingTrait;
    public function __construct()
    {

        $this->middleware('auth');

    }

    public $data = array();
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $hardwareInfo = $this->getHardwareInfo();

        $cpu = round($hardwareInfo['CPU'] / 1000, 1) . ' GHz';
        $hdd = round($hardwareInfo['HDD'] / 1000, 1) . ' GB';
        if ($hdd < 1) {
            $hdd = round($hardwareInfo['HDD']) . ' MB';
        }
        $ram = round($hardwareInfo['RAM'] / 1000, 1) . ' GB';
        if ($ram < 1) {
            $ram = round($hardwareInfo['RAM']) . ' MB';
        }
        $net = round($hardwareInfo['NET'], 1);
        if ($net == 1000) {
            $net = '1 Gbit/s';
        } else {
            $net .= ' Mbit/s';
        }
        $xhd = $hardwareInfo['XHD'] / 1000;
        if ($xhd == 0) {
            $xhd = 'None';
        } else {
            $xhd .= ' GB';
        }

        $hardwarepanel = view('sections.index.hardware', compact('cpu', 'hdd', 'ram', 'net', 'xhd'));
        $topUsers = $this->getTopUsers();
        $top10 = view('sections.index.top10', compact('topUsers'));

        $this->data = array(
            'active-index' => 'active',
            'Description' => 'This is New Application',
            'author' => 'foo',
            'user' => Auth::user(),
            'hardware' => $hardwarepanel,
            'top7' => $top10,
            'gInfo' => null,
            'news' => null,
            'fbi' => null,
            'rInfo' => null,
            'gNews' => null
        );
        return view('dashboard')->with('data', $this->data);
    }

    /**
     * Get the path the user should be redirected to.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        return redirect("/")->withSuccess('Please Login First');
    }
}
