<?php

namespace App\Http\Requests\Apis;

use App\Constants\GenderConstant;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->guest();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'firstName' => ['required', 'min:2', 'max:220'],
            'lastName' => ['required', 'min:2', 'max:220'],
            'fullName' => ['required', 'min:2', 'max:220'],
            'email' => ['required', 'email', 'unique:users,email'],
            'role' => ['required'],
            'password' => ['required',  'min:6', 'confirmed', 'max:220', Password::defaults()],
            'gender' => ['required', 'in:male,female'],
            'phone' => ['required', 'min:10', 'max:220'],
            'image' => ['sometimes', 'image']
        ];
    }

    public function validationData()
    {
        return $this->all();
    }

    protected  function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $validator->errors() , 'statusCode' => 422], 422));
    }
}
