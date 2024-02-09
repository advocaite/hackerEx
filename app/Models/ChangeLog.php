<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $description
 * @property string $text
 * @property string $dateCreated
 * @property string $author
 */
class ChangeLog extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'changelog';

    /**
     * @var array
     */
    protected $fillable = ['description', 'text', 'dateCreated', 'author'];
}
