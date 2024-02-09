<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property boolean $id
 * @property string $user
 * @property string $email
 * @property string $password
 * @property string $lastLogin
 */
class Admin extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'admin';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'boolean';

    /**
     * @var array
     */
    protected $fillable = ['user', 'email', 'password', 'lastLogin'];
}
