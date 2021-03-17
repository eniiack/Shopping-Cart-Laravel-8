<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class LoginAdminRequest extends FormRequest
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
            "email" => ["required","email",function ($attribute, $value, $fail ) {
                $email = request('email');
                $user = User::where('email' , $email)->first();
                if ( is_null($user) ) {
                    $fail('این ایمیل در سیستم ثبت نشده است');
                }
            },],
            'password' => ["required", function ($attribute, $value, $fail ) {
                $email = request('email');
                $user = User::where('email' , $email)->first();
    
                if ( is_null($user) ) {
                }else{
                if (! Hash::check($value, $user->password)) {
                    $fail('رمز عبور صحیح نمیباشد');
                }
            }
            },
        ],
        "g-recaptcha-response" => ['required' , new recaptcha()]
        ];
    }
}
