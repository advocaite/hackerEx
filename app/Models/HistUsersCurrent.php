<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $userID
 * @property string $user
 * @property integer $reputation
 * @property integer $age
 * @property integer $clanID
 * @property string $clanName
 * @property float $timePlaying
 * @property integer $missionCount
 * @property integer $hackCount
 * @property integer $ddosCount
 * @property integer $ipResets
 * @property integer $moneyEarned
 * @property integer $moneyTransfered
 * @property integer $moneyHardware
 * @property integer $moneyResearch
 * @property integer $warezSent
 * @property integer $spamSent
 * @property float $bitcoinSent
 * @property integer $profileViews
 */
class HistUsersCurrent extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'hist_users_current';

    /**
     * @var array
     */
    protected $fillable = ['userID', 'user', 'reputation', 'age', 'clanID', 'clanName', 'timePlaying', 'missionCount', 'hackCount', 'ddosCount', 'ipResets', 'moneyEarned', 'moneyTransfered', 'moneyHardware', 'moneyResearch', 'warezSent', 'spamSent', 'bitcoinSent', 'profileViews'];
}
