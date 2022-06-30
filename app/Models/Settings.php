<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Settings
 * @package App\Models
 * @version June 30, 2022, 4:09 pm UTC
 *
 * @property string $partner
 * @property string $key
 * @property string $value
 */
class Settings extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'settings';
    
    protected $dates = ['deleted_at'];

    public $fillable = [
        'partner',
        'key',
        'value'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'partner' => 'string',
        'key' => 'string',
        'value' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'partner' => 'required',
        'key' => 'required',
        'value' => 'required'
    ];

    
}
