<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class DataRequest extends FormRequest
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
            //
            'name'=> 'required',
            'gender'=> 'required',
            'faculty'=> 'required',
            'birthday_year'=> 'required',
        ];
    }
    public function messages()
{
    return [
        'name.required' => 'The name field is required',
        'gender.required'  => 'The gender field is required', 
        'faculty.required' => 'The faculty field is required',
        'birthday_year.required'  => 'The birth_day field is required',
    ];
}
}
