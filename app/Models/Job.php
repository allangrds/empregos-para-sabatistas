<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'slug',
        'job_name',
        'description',
        'company_name',
        'contract_type',
        'requirements',
        'differential',
        'benefits',
        'salary',
        'initial_salary',
        'final_salary',
        'how_to_apply',
        'zipcode',
        'city',
        'state',
        'category_id',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'jobs';
}
