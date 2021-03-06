<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Rules\recaptcha;

class CustomAuthController extends Controller
{
    public function register()
    {
        if(Auth()->check() == true){
            return redirect('/');
        }
        
        return view('auth.register');
    }

    public function register_form(RegisterRequest $request)
    {
        
        $valid_data = $request->validated();
        
        // if($validator->fails()){
        //     return redirect()
        //                 ->back()
        //                 ->withErrors($validator);
        // }
    
    
    
        $pass = Hash::make($valid_data['password']);
            User::create([
                "name" => $valid_data['name'],
                "email" => $valid_data['email'],
                "password" => $pass
            ]);
    
            alert()->success('با موفقیت ثبت نام شدید', 'موفقیت');
            $user = User::where('email' , $valid_data['email'])->first();

            Auth::login($user);
            // try 
            // {
            //     $message = "تست ارسال وب سرویس قاصدک";
            //     $lineNumber = "10008566";
            //     $receptor = "09907763077";
            //     $api = new \Ghasedak\GhasedakApi('48d84b128159a19a187ef77e8780873f277325c9eca430c62ca069eb817031de');
            //     $api->SendSimple($receptor,$message,$lineNumber);
            // }
            // catch(\Ghasedak\Exceptions\ApiException $e){
            //     throw $e;
            // }
            // catch(\Ghasedak\Exceptions\HttpException $e){
            //     echo $e->errorMessage();
            // }
            return redirect('/');
    }

    public function login()
    {
         // var_dump(Auth()->user()->name);
    // var_dump(Auth()->check());
    return view('auth.login');
    }

    public function login_form(LoginRequest $request)
    {
        //   dd(request()->all());
    $valid_data = $request->validated();

    $email = request('email');
  
    $user = User::where('email' , $email)->first();

        Auth::login($user);
        alert()->success('با موفقیت وارد شدید', 'موفقیت');
        return redirect('/');
   
    }

    public function logout()
    {
        Auth::logout();
        alert()->success('با موفقیت خارج شدید', 'موفقیت');
    
        return redirect('/');
    }

    public function recover_password()
    {
     // $valid_data = Validator::make(request()->all() , [
    //     "email" => ["required","email",function ($attribute, $value, $fail ) {
    //         $email = request('email');
    //         $user = User::where('email' , $email)->first();
    //         if ( is_null($user) ) {
    //             $fail('این ایمیل در سیستم ثبت نشده است');
    //         }
    //     },],
    // ])->validated();

    // // Mail::to($valid_data['email'])->send(new SendMail("farshid" , "1990"));
    // $credentials = ['email' => $valid_data['email']];
    //     $response = Password::sendResetLink($credentials, function (Message $message) {
    // var_dump("no");

    //         $message->subject($this->getEmailSubject());
    //     });

    //     switch ($response) {
    //         case Password::RESET_LINK_SENT:
    //             return redirect()->back()->with('status', trans($response));
    //         case Password::INVALID_USER:
    //             var_dump("no");
    //             // return redirect()->back()->withErrors(['email' => trans($response)]);
    //     }
    }

    public function recovery()
    {
        return view('auth.recovery_password');
    }

}
