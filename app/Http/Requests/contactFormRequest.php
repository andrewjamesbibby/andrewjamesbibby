<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Mail\enquiry;
use Mail;

class contactFormRequest extends FormRequest
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
            'name'                 => 'required|string|max:200',
            'email'                => 'required|email|max:200',
            'message'              => 'required|string|max:1000',
            'g-recaptcha-response' => 'required|string|max:1000',
        ];
    }

    public function send()
    {
        if($this->verifyCaptcha()){
            Mail::to('andrewjamesbibby@hotmail.com')->send(new enquiry($this->name, $this->email, $this->message));
        }
    }

    private function verifyCaptcha(){

        return true;

    }

}
