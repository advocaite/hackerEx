<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $userID
 * @property boolean $certLevel
 */
class Certifications extends Model
{
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
    protected $fillable = ['certLevel'];
}
