<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'mail_address'=>'required|email|max:100',
            'mail_address' => Rule::unique('users')->ignore($this->id),
            'password'=>'required|min:3|max:15',
            'password_confirm'=>'required|same:password',
            'name' =>'required|min:3|max:255',
            'address'=>'max:255',
            'phone'=> 'max:15|regex:/^([0-9\s\-\+\(\)]*)$/'
        ];
    }
}
