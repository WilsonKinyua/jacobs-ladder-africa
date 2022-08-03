<?php

namespace App\Http\Requests;

use App\Models\WhatWeDo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateWhatWeDoRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('what_we_do_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
                'unique:what_we_dos,title,' . request()->route('what_we_do')->id,
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
