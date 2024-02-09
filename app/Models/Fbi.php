<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $ip
 * @property boolean $reason
 * @property integer $bounty
 * @property string $dateAdd
 * @property string $dateEnd
 */
class Fbi extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'fbi';

    /**
     * @var array
     */
    protected $fillable = ['ip', 'reason', 'bounty', 'dateAdd', 'dateEnd'];
}
