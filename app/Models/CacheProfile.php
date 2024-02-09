<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $userID
 * @property string $expireDate
 */
class CacheProfile extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'cache_profile';

    /**
     * @var array
     */
    protected $fillable = ['userID', 'expireDate'];
}
