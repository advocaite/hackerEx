<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $accID
 * @property string $expireDate
 */
class BankaccountsExpire extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'bankaccounts_expire';

    /**
     * @var array
     */
    protected $fillable = ['accID', 'expireDate'];
}
