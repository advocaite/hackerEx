<?php
namespace App\Traits;

use App\Models\hardware;
use DB;
use Auth;

trait HardwareTrait
{
    public function getHardwareInfo($id = null, $pcType = '', $xhd = '')
    {
        if ($id === null) {
            $id = Auth::id();
        }

        $hardwareInfo = DB::table('hardware')
            ->selectRaw('COUNT(*) AS total, SUM(cpu) AS cpu, SUM(hdd) AS hdd, SUM(ram) AS ram, net')
            ->where('userID', $id)
            ->groupBy('net')
            ->first();

        $totalPCs = $hardwareInfo->total;

        if ($totalPCs == 0) {
            abort(500, "Error: hardware is not registered");
        }

        $totalCPU = $hardwareInfo->cpu;
        $totalHDD = $hardwareInfo->hdd;
        $totalRAM = $hardwareInfo->ram;
        $totalNET = $hardwareInfo->net;

        $totalXHD = DB::table('hardware_external')
            ->where('userID', $id)
            ->sum('size');

        $values = [
            'CPU' => $totalCPU,
            'HDD' => $totalHDD,
            'RAM' => $totalRAM,
            'NET' => $totalNET,
            'XHD' => $totalXHD,
        ];

        return $values;
    }


}
