<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationIncomingMailsUpdate extends FormRequest
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
            "content" => "required",
            "file" => "mimes:pdf|max:10240",
            "old_file" => "required"
        ];
    }
}
