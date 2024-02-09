<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $from
 * @property integer $to
 * @property string $subject
 * @property string $text
 * @property string $dateSent
 * @property integer $round
 */
class hist_mails extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['from', 'to', 'subject', 'text', 'dateSent', 'round'];
}
