<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $userID
 * @property integer $reputation
 */
class Cache extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'cache';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'userID';

    /**
     * Indicates if the IDs are auto-incrementing.
     * 
     * @var bool
     */
    public $incrementing = false;

    /**
     * @var array
     */
    protected $fillable = ['reputation'];
}
