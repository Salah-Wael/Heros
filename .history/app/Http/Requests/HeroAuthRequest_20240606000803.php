<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeroAuthRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'firstName' => ['required', 'min:2', 'max:50'],
            'lastName' => ['required', 'min:2', 'max:50'],
            'shortName' => ['required', 'max:20'],
            'height' => ['required', 'numeric', 'min:0.5', 'max:2.50'],
            'weight' => ['required', 'numeric', 'min:10'],
            'origin_country' => ['required'],
            'play_country' => ['required'],
            'sport' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:6', 'confirmed'],
            'birthDate' => ['required', 'date'],
            'gender' => ['required'],
            'checkbox' => ['required'],
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ];
    }
}
