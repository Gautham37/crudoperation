<?php

namespace App\Repositories;

use App\Models\Employee;
use Prettus\Repository\Eloquent\BaseRepository;

class EmployeeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'first_name',
        'last_name',
        'company_id',
        'email',
        'phone'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Employee::class;
    }
}
