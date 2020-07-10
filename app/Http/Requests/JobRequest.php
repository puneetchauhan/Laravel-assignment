<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
         'company_name' => 'required|string|max:255',
         'designation' => 'required|string|max:255',
		 'experience_details' => 'required|string|max:255',
         'company_from' => 'required|numeric',
			'company_to' => 'required|numeric',
    ];
    }
}
