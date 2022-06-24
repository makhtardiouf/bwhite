<?php

namespace App\Repositories;

use App\Models\Listing;
use App\Repositories\BaseRepository;

/**
 * Class ListingRepository
 * @package App\Repositories
 * @version June 24, 2022, 12:40 pm UTC
*/

class ListingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'description',
        'category',
        'area'
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
        return Listing::class;
    }
}
