<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $userID
 * @property integer $rank
 */
class RankingUser extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ranking_user';

    /**
     * @var array
     */
    protected $fillable = ['userID', 'rank'];
}
