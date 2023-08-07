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
        'how_to_apply_telephone',
        'how_to_apply_email',
        'how_to_apply_site',
        'zipcode',
        'city_id',
        'state_id',
        'category_id',
        'allocation',
        'responsabilities',
        'working_time',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'jobs';

    /**
     * Get the job's company name.
     *
     * @param  string  $value
     * @return string
     */
    public function getCompanyNameAttribute($value)
    {
        return ucfirst($value);
    }

    /**
     * Get the state from the city
     */
    public function state()
    {
        return $this->belongsTo('App\Models\State');
    }

    /**
     * Get the city from the city
     */
    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }
}
