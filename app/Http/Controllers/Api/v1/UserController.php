<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\User as ResourcesUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function login(Request $request)
    {
      $data =  $this->validate($request , [
            'email' => 'required|exists:users',
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
        ]);

        if(! Auth::attempt($data)){
            return response([
                'data' => 'ورود موفقیت آمیز نبود',
                'status'=>'error'
            ],403);
        }
        auth()->user()->update([
            'api_token' => Str::random(100)
         ]);
        $user = auth()->user();
        return new ResourcesUser($user);
    }

    public function register(Request $request)
    {
        $data =  $this->validate($request , [
            "name" => "required|min:5|max:50",
            "email" => "required|email|unique:App\Models\User,email",
            "password" => "required|min:8|regex:/[a-z]/|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/",
            "password_confirmation" =>"required|same:password",
        ]);


        $pass = Hash::make($data['password']);
        $user =  User::create([
            "name" => $data['name'],
            "email" => $data['email'],
            "password" => $pass,
            "api_token"=> Str::random(100)
        ]);

     
        // $token = Hash::make($data['email']. date("YmdHis") . "3pu4098eygriuio43y8");
        // session(['person' => $token]);

        // if(! Auth::attempt($user)){
        //     return response([
        //         'data' => 'عضویت موفقیت آمیز نبود',
        //         'status'=>'error'
        //     ],403);
        // }
        // $user = auth()->user();
        return new ResourcesUser($user);
        
    }
}
