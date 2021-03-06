<?php

namespace App\Rules;

use Exception;
use GuzzleHttp\Client;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Http;

class recaptcha implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        
            $response =  Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify' , [
                'secret' => env('GOOGLE_RECAPTCHA_SECTER_KEY'),
                    'response' => $value,
                    'remoteip' => request()->ip()
            ]);
           
            $response->throw();
            $response = $response->json(); 
            return $response['success'];
       
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'ورود انجام نشد.';
    }
}
