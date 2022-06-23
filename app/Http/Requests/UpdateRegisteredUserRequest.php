<?php

namespace App\Http\Requests;

use App\Models\RegisteredUser;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateRegisteredUserRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('registered_user_edit');
    }

    public function rules()
    {
        return [
            'full_name' => [
                'string',
                'required',
            ],
            'email' => [
                'required',
                'unique:registered_users,email,' . request()->route('registered_user')->id,
            ],
        ];
    }
}
