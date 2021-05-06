<?php

namespace App\Http\Controllers\Admin;

use App\Models\ActiveCode;
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
            "phone" => ["required","regex:/^09(1[0-9]|9[0-2]|2[0-2]|0[1-5]|41|3[0,3,5-9])\d{7}$/",function ($attribute, $value, $fail ) {
                $phone = request('phone');
                $user = User::where('phone' , $phone)->first();
                if ( is_null($user) ) {
                    $fail('این شماره همراه در سیستم ثبت نشده است');
                }
            },
            // "email" => ["required","email",function ($attribute, $value, $fail ) {
            //     $email = request('email');
            //     $user = User::where('email' , $email)->first();
            //     if ( is_null($user) ) {
            //         $fail('این ایمیل در سیستم ثبت نشده است');
            //     }
            // },
            ], 'password' => ["required", function ($attribute, $value, $fail ) {
                $phone = request('phone');
                $user = User::where('phone' , $phone)->first();
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
              "regex" => "فرمت شماره موبایل صحیح نمیباشد",
            //   "unique" => "این شماره همراه در سیستم ثبت نشده است",
          ]);
        
        //   $user = User::where( "email" , $data['email'] )->first();
        //   Auth::login($user);
        //   $token = Hash::make($data['email']. date("YmdHis") . "3pu4098eygriuio43y8");
        //   session(['admin' => $token]);
        $phone = request('phone');
        $user = User::where('phone' , $phone)->first();
        $code = ActiveCode::generateCode($user);
        $request->session()->flash('phone' , $phone);


        try 
        {
            $message = $code;
            $lineNumber = "10008566";
            $receptor = "09907763077";
            $api = new \Ghasedak\GhasedakApi('48d84b128159a19a187ef77e8780873f277325c9eca430c62ca069eb817031de');
            $api->SendSimple($receptor,$message,$lineNumber);
        }
        catch(\Ghasedak\Exceptions\ApiException $e){
            echo $e->errorMessage();
        }
        catch(\Ghasedak\Exceptions\HttpException $e){
            echo $e->errorMessage();
        }

        //   return redirect(route('admin.verify_code'));
        return redirect(route('admin.verify_code'));
    }

    public function verify_code(Request $request)
    {
        if(! $request->session()->has('phone')){
            return redirect('admin/login');
        }
        $request->session()->reflash();
        return view('panel.verify');
    }
    public function verify_code_post(Request $request)
    {
        if(! $request->session()->has('phone')){
            return redirect('admin/login');
        }
        $code = $request->code;

        $data = $request->validate([
            "code" => ["required",function ($attribute, $value, $fail ) {
                $code = request('code');
                $user = ActiveCode::where('code' , $code)->first();
                if ( is_null($user) ) {
                    $fail('این کد در سیستم ثبت نشده است');
                }
                if(isset($user)){
                    $user = $user->user;
                    $phone = session()->get('phone');
                    if ( $user->phone != $phone ) {
                        $fail('این نام کاربری مطعلق به شما نیست');
                    }
                }
                
            },
            ]
          ]
          );
        $user = ActiveCode::where('code' , $code)->first();
        $user = $user->user;
        $phone = session()->get('phone');
        if ( $user->phone != $phone ) {
            return redirect('admin/login');
        }
           Auth::login($user);
          $token = Hash::make($user->email. date("YmdHis") . "3pu4098eygriuio43y8");
          session(['admin' => $token]);
          $user->activeCode()->delete();

        //   $user->activeCode->delete();
          return redirect(route('admin.'));

    }
}
