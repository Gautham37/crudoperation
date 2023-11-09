<?php

namespace App\Repositories;

use App\Models\Company;
use Prettus\Repository\Eloquent\BaseRepository;

class CompanyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'logo',
        'website'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Company::class;
    }
}
