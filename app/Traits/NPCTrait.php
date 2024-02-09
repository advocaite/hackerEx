<?php
namespace App\Traits;

use Illuminate\Support\Facades\DB;

trait NPCTrait
{
    public function issetNPC($nid)
    {

        if (is_numeric($nid)) {

            //$this->session->newQuery();
            $data = DB::table('npc')
                ->select('npcType')
                ->where('id', '=', $nid)
                ->get();

            if (count($data) == '1') {

                return TRUE;

            } else {

                return FALSE;

            }

        }

    }

    public function getNPCInfo($nid, $lang = '')
    {

        if (self::issetNPC($nid)) {

            $table = 'npc_info_en';

            if ($lang == 'pt' || $lang == 'br') {
                $table = 'npc_info_pt';
            }
            $data = DB::table('npc')
                ->select(DB::raw('npcIP, npcType, ' . $table . '.web AS npcWeb, npcPass, ' . $table . '.name'))
                ->leftjoin($table, $table . '.npcID', '=', 'npc.id')
                ->where('id', '=', $nid)
                ->limit(1)
                ->get();

            return $data;

        } else {

            die("Invaalid ID");

        }

    }

    public function downNPC($nid)
    {
        $total = DB::table('npc_down')
            ->select(DB::raw('COUNT(*) AS total, status'))
            ->where('npcID', '=', $nid)
            ->limit(1)
            ->get();
        /*$this->session->newQuery();
        $sqlSelect = "SELECT COUNT(*) AS total FROM npc_down WHERE npcID = $nid LIMIT 1";
        $total = $this->pdo->query($sqlSelect)->fetch(PDO::FETCH_OBJ)->total;*/

        if ($total == 1) {
            return TRUE;
        } else {
            return FALSE;
        }

    }

    public function randString($length, $charset = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789')
    {

        $str = '';
        $count = strlen($charset);
        while ($length--) {
            $str .= $charset[mt_rand(0, $count - 1)];
        }
        return $str;

    }

    public function generateNPC($type)
    {

        $gameIP1 = rand(0, 255);
        $gameIP2 = rand(0, 255);
        $gameIP3 = rand(0, 255);
        $gameIP4 = rand(0, 255);

        $gameIP = $gameIP1 . '.' . $gameIP2 . '.' . $gameIP3 . '.' . $gameIP4;
        $genIP = ip2long($gameIP);

        $npcID = DB::table('npc')->insertGetId(
            ['npcType' => $type, 'npcIP' => $genIP, 'npcPass' => self::randString(8)]
        );

        DB::table('npc_info_en')->insert(
            ['npcID' => $npcID, 'name' => 'Initech Corp', 'web' => '']
        );

        DB::table('npc_info_pt')->insert(
            ['npcID' => $npcID, 'name' => 'Initech Corp', 'web' => '']
        );
        DB::table('hardware')->insert(
            ['userID' => $npcID, 'cpu' => '1500', 'net' => '10', 'isNPC' => 1]
        );
        DB::table('log')->insert(
            ['userID' => $npcID, 'text' => '', 'isNPC' => 1]
        );

        return $npcID;

    }

    public function getNPCByKey($key)
    {

        $npc = DB::table('npc')
            ->join('npc_key', 'npc.id', '=', 'npc_key.npcID')
            ->select('npc.id', 'npc.npcIP')
            ->limit(1)
            ->where('npc_key.key', '=', $key)
            ->get();

        return $npc;

    }
}
