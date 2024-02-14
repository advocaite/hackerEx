<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Traits\RankingTrait;

class RankingController extends Controller
{
    use RankingTrait;

    public function showRanking($display = 'user')
    {
        return $this->displayRanking($display);
    }
}
