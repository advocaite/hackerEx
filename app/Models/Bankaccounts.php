<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $bankAcc
 * @property string $bankPass
 * @property integer $bankID
 * @property integer $bankUser
 * @property integer $cash
 * @property string $dateCreated
 */
class Bankaccounts extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['bankAcc', 'bankPass', 'bankID', 'bankUser', 'cash', 'dateCreated'];
}
