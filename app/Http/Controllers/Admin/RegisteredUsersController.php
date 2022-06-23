<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyRegisteredUserRequest;
use App\Http\Requests\StoreRegisteredUserRequest;
use App\Http\Requests\UpdateRegisteredUserRequest;
use App\Models\RegisteredUser;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RegisteredUsersController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('registered_user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $registeredUsers = RegisteredUser::all();

        return view('admin.registeredUsers.index', compact('registeredUsers'));
    }

    public function create()
    {
        abort_if(Gate::denies('registered_user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.registeredUsers.create');
    }

    public function store(StoreRegisteredUserRequest $request)
    {
        $registeredUser = RegisteredUser::create($request->all());

        return redirect()->route('admin.registered-users.index');
    }

    public function edit(RegisteredUser $registeredUser)
    {
        abort_if(Gate::denies('registered_user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.registeredUsers.edit', compact('registeredUser'));
    }

    public function update(UpdateRegisteredUserRequest $request, RegisteredUser $registeredUser)
    {
        $registeredUser->update($request->all());

        return redirect()->route('admin.registered-users.index');
    }

    public function show(RegisteredUser $registeredUser)
    {
        abort_if(Gate::denies('registered_user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.registeredUsers.show', compact('registeredUser'));
    }

    public function destroy(RegisteredUser $registeredUser)
    {
        abort_if(Gate::denies('registered_user_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $registeredUser->delete();

        return back();
    }

    public function massDestroy(MassDestroyRegisteredUserRequest $request)
    {
        RegisteredUser::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
