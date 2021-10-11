<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationIncomingMails extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            "title" => "required",
            "subject" => "required",
            "from" => "required",
            "to" => "required",
            "phone" => "required",
            "content" => "required"
        ];
    }
}
