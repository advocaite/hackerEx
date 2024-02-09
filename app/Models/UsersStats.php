<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $uid
 * @property string $dateJoined
 * @property integer $exp
 * @property string $certifications
 * @property string $awards
 * @property float $timePlaying
 * @property integer $missionCount
 * @property integer $hackCount
 * @property integer $ddosCount
 * @property float $warezSent
 * @property integer $spamSent
 * @property float $bitcoinSent
 * @property integer $ipResets
 * @property string $lastIpReset
 * @property integer $pwdResets
 * @property string $lastPwdReset
 * @property integer $moneyEarned
 * @property integer $moneyTransfered
 * @property integer $moneyHardware
 * @property integer $moneyResearch
 * @property integer $profileViews
 */
class UsersStats extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'uid';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['dateJoined', 'exp', 'certifications', 'awards', 'timePlaying', 'missionCount', 'hackCount', 'ddosCount', 'warezSent', 'spamSent', 'bitcoinSent', 'ipResets', 'lastIpReset', 'pwdResets', 'lastPwdReset', 'moneyEarned', 'moneyTransfered', 'moneyHardware', 'moneyResearch', 'profileViews'];
}
