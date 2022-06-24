<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Category
 * @package App\Models
 * @version June 24, 2022, 11:24 am UTC
 *
 * @property \App\Models\Category $parent
 * @property string $name
 * @property string $description
 * @property string $icon
 * @property integer $priority
 * @property integer $parent_id
 */
class Category extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'category';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'description',
        'icon',
        'priority',
        'parent_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'icon' => 'string',
        'priority' => 'integer',
        'parent_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function parent()
    {
        return $this->belongsTo(\App\Models\Category::class, 'parent_id', 'id');
    }
}
