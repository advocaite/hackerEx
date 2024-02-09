<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $dateCreated
 * @property string $bugText
 * @property integer $reportedBy
 * @property string $sessionContent
 * @property string $serverContent
 * @property boolean $follow
 * @property boolean $solved
 */
class BugReports extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bugreports';

    /**
     * @var array
     */
    protected $fillable = ['dateCreated', 'bugText', 'reportedBy', 'sessionContent', 'serverContent', 'follow', 'solved'];
}
