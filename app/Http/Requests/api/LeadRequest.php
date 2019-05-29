<?php

namespace App\Http\Requests\api;

use Illuminate\Foundation\Http\FormRequest;


class LeadRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [

        ];
    }

}
