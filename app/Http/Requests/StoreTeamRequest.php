<?php

namespace App\Http\Requests;

use App\Models\Team;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreTeamRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('team_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'unique:teams',
            ],
            'title' => [
                'string',
                'required',
            ],
            'intro_caption' => [
                'required',
            ],
            'user_bio' => [
                'required',
            ],
            'profile_picture' => [
                'required',
            ],
        ];
    }
}
