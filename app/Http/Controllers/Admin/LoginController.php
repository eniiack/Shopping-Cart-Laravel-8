<?php

namespace App\Http\Controllers\Admin;

use App\ActiveCode;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use App\Rules\recaptcha;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function loginAdmin(Request $request)
    {
        // return session()->all();
        // Auth::logout();
        return view('panel.login');
    }
    public function loginAdminPost(Request $request)
    {
          $data = $request->validate([
            "g-recaptcha-response" => ['required' , new recaptcha()],
            "email" => ["required","email",function ($attribute, $value, $fail ) {
                $email = request('email');
                $user = User::where('email' , $email)->first();
                if ( is_null($user) ) {
                    $fail('این ایمیل در سیستم ثبت نشده است');
                }
            },
            ], 'password' => ["required", function ($attribute, $value, $fail ) {
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
        
            // "phone" => ["regex:/^09(1[0-9]|9[0-2]|2[0-2]|0[1-5]|41|3[0,3,5-9])\d{7}$/"  , "required" , function ($attribute, $value, $fail ) {
            //     $phone = request('phone');
            //     $user = Admin::where('mobile' , $phone)->first();
            //     if ( is_null($user) ) {
            //         $fail('این شماره همراه در سیستم ثبت نشده است');
            //     }
            // }, ]
          ]
          
          ,[
            //   "regex" => "فرمت شماره موبایل صحیح نمیباشد",
            //   "unique" => "این شماره همراه در سیستم ثبت نشده است",
          ]);
        
          $user = User::where( "email" , $data['email'] )->first();
          Auth::login($user);
          $token = Hash::make($data['email']. date("YmdHis") . "3pu4098eygriuio43y8");
          session(['admin' => $token]);
          return redirect(route('admin.'));
    }
}
