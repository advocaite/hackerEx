<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $author
 * @property string $title
 * @property string $content
 * @property string $date
 * @property boolean $type
 * @property string $info1
 * @property string $info2
 */
class News extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['author', 'title', 'content', 'date', 'type', 'info1', 'info2'];
}
