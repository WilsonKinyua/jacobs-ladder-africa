<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRegisteredUserRequest;
use App\Http\Requests\UpdateRegisteredUserRequest;
use App\Http\Resources\Admin\RegisteredUserResource;
use App\Models\RegisteredUser;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RegisteredUsersApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('registered_user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new RegisteredUserResource(RegisteredUser::all());
    }

    public function store(StoreRegisteredUserRequest $request)
    {
        $registeredUser = RegisteredUser::create($request->all());

        return (new RegisteredUserResource($registeredUser))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(RegisteredUser $registeredUser)
    {
        abort_if(Gate::denies('registered_user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new RegisteredUserResource($registeredUser);
    }

    public function update(UpdateRegisteredUserRequest $request, RegisteredUser $registeredUser)
    {
        $registeredUser->update($request->all());

        return (new RegisteredUserResource($registeredUser))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(RegisteredUser $registeredUser)
    {
        abort_if(Gate::denies('registered_user_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $registeredUser->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
