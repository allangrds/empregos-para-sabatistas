<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'job_name' => 'required|max:255',
            'description' => 'nullable|max:1200',
            'company_name' => 'required|max:255',
            'contract_type' => 'required|max:255',
            'requirements' => 'required|max:1200',
            'differential' => 'nullable|max:1200',
            'benefits' => 'required|max:1200',
            'salary' => 'nullable|numeric|max:50000',
            'initial_salary' => 'nullable|numeric|max:50000',
            'final_salary' => 'nullable|numeric|max:50000',
            'how_to_apply' => 'required|max:500',
            'zipcode' => 'required|min:8|max:9',
            'city' => 'required|max:50',
            'state' => 'required|max:30',
            'category_id' => 'required',
            // 'g-recaptcha-response' => 'recaptcha',
            'allocation' => 'required|max:255',
            'responsabilities' => 'max:1200',
            'working_time' => 'max:255',
        ];
    }
}
