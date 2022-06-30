<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Payments
 * @package App\Models
 * @version June 30, 2022, 1:15 pm UTC
 *
 * @property \App\Models\User $user
 * @property string $id
 * @property string $type
 * @property string $product
 * @property string $platform
 * @property json $data
 * @property integer $user_id
 */
class Payments extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'payments';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'id',
        'type',
        'product',
        'platform',
        'data',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'string',
        'type' => 'string',
        'product' => 'string',
        'platform' => 'string',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id' => 'required',
        'type' => 'required',
        'data' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }
}
