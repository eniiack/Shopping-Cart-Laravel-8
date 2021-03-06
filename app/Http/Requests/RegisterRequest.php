<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\recaptcha;
class RegisterRequest extends FormRequest
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
            "name" => "required|min:5|max:50",
            "email" => "required|email|unique:App\Models\User,email",
            "password" => "required|min:8|regex:/[a-z]/|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/",
            "password_confirmation" =>"required|same:password",
            "privacy" => "required",
            "g-recaptcha-response" => ['required' , new recaptcha()]
        ];
    }
}
