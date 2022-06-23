<?php

namespace App\Http\Requests;

use App\Models\RegisteredUser;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyRegisteredUserRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('registered_user_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:registered_users,id',
        ];
    }
}
