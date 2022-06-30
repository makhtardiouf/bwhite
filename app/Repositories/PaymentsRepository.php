<?php

namespace App\Repositories;

use App\Models\Payments;
use App\Repositories\BaseRepository;

/**
 * Class PaymentsRepository
 * @package App\Repositories
 * @version June 30, 2022, 1:15 pm UTC
*/

class PaymentsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'type',
        'product',
        'platform'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Payments::class;
    }
}
