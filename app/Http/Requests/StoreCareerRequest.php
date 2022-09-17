<?php

namespace App\Http\Requests;

use App\Models\Career;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCareerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('career_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'country' => [
                'string',
                'nullable',
            ],
            'town' => [
                'string',
                'nullable',
            ],
            'type' => [
                'string',
                'nullable',
            ],
            'vacancy_document' => [
                'required',
            ],
            // 'vacancy_image' => [
            //     'required',
            // ],
        ];
    }
}
