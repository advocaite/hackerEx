<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $newsID
 * @property string $info1
 * @property string $info2
 * @property string $infoDate
 */
class NewsHistory extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'news_history';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'newsID';

    /**
     * @var array
     */
    protected $fillable = ['info1', 'info2', 'infoDate'];
}
