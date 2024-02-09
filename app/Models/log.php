<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $userID
 * @property string $text
 * @property boolean $isNPC
 */
class log extends Model
{
    public $timestamps = false;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'log';

    /**
     * @var array
     */
    protected $fillable = ['userID', 'text', 'isNPC'];
}
