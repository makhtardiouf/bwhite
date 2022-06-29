<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Listing
 * @package App\Models
 * @version June 24, 2022, 12:40 pm UTC
 *
 * @property \App\Models\Category $category
 * @property string $title
 * @property string $description
 * @property string $category
 * @property number $price
 * @property string $image
 * @property string $area
 * @property integer $category_id
 */
class Listing extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'listing';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'title',
        'description',
        'category',
        'price',
        'image',
        'area',
        'category_id',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'description' => 'string',
        'category' => 'string',
        'price' => 'double',
        'image' => 'string',
        'area' => 'string',
        'category_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class, 'category_id', 'id');
    }
}
