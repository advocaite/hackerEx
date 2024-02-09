<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $userID
 * @property string $lang
 */
class UsersLanguage extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'users_language';

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
    protected $fillable = ['lang'];
}
