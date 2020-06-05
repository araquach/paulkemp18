<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingFormRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'mobile' => 'required | unique:bookings',
            'stylist' => 'required'
        ];
    }

    public function messages()
	{
		return [
    	    'first_name.required' => 'Please enter your first name',
    	    'second_name.required' => 'Please enter your second name',
            'mobile.required' => 'Please enter your mobile number',
            'mobile.unique' => 'We already have your contact information',
            'body.required' => 'Your message cannot be blank',
		];
	}
}
