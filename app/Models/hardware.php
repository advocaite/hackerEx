<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $serverID
 * @property integer $userID
 * @property string $name
 * @property float $cpu
 * @property float $hdd
 * @property float $ram
 * @property float $net
 * @property boolean $isNPC
 */
class hardware extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'serverID';

    /**
     * @var array
     */
    protected $fillable = ['userID', 'name', 'cpu', 'hdd', 'ram', 'net', 'isNPC'];
}
