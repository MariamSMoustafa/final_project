<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuideRegister extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:guides'],
            'password' => ['required', 'string', 'min:8'],
            'phone' => ['required', 'string', 'min:11', 'unique:guides'],
            'price' => ['required', 'string', 'unique:guides'],
            'birthday' => ['required', 'date',],
            'city' => ['required', 'string'],
            'gender'=> ['required','in:male,female'],

        ];
    }
}
