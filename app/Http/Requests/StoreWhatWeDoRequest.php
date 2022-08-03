<?php

namespace App\Http\Requests;

use App\Models\WhatWeDo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreWhatWeDoRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('what_we_do_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
                'unique:what_we_dos',
            ],
            'content_photo' => [
                'required',
            ],
            'description' => [
                'required',
            ],
        ];
    }
}
