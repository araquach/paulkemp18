<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class HairModelFormRequest extends Request
{
    protected function getRedirectUrl()
    {
        $url = $this->redirector->getUrlGenerator();
        return $url->previous() . '#errors';
    }

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
            'name' => 'required',
            'mobile' => 'required',
            'hairinfo' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Your full name is required',
            'mobile.required' => 'Your mobile number is required',
            'hairinfo.required' => 'Additional information is required',
        ];
    }
}
