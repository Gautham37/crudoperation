<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public $table = 'employees';
    
    public $fillable = [
        'first_name',
        'last_name',
        'company_id',
        'email',
        'phone'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'first_name' => 'string',
        'last_name' => 'string',
        'company_id' => 'integer',
        'email' => 'string',
        'phone' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'company_id' => 'required|exists:companies,id',
        'email' => 'required',
        'phone' => 'required'
    ];


    public function company() {
        return $this->hasOne('App\Models\Company','id','company_id');
    }

}
