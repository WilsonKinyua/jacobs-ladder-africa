@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.show') }} {{ trans('cruds.team.title') }}
        </div>

        <div class="card-body">
            <div class="form-group">
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.teams.index') }}">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>
                                {{ trans('cruds.team.fields.id') }}
                            </th>
                            <td>
                                {{ $team->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.team.fields.name') }}
                            </th>
                            <td>
                                {{ $team->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.team.fields.title') }}
                            </th>
                            <td>
                                {{ $team->title }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.team.fields.intro_caption') }}
                            </th>
                            <td>
                                {!! $team->intro_caption !!}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.team.fields.user_bio') }}
                            </th>
                            <td>
                                {!! $team->user_bio !!}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.team.fields.profile_picture') }}
                            </th>
                            <td>
                                @if ($team->profile_picture)
                                    <a href="{{ $team->profile_picture->getUrl() }}" target="_blank"
                                        style="display: inline-block">
                                        <img src="{{ $team->profile_picture->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.team.fields.twitter_url') }}
                            </th>
                            <td>
                                <a href="{{ $team->twitter_url }}" target="_blank"
                                    rel="noopener noreferrer">{{ $team->twitter_url }}</a>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.team.fields.linkedin_url') }}
                            </th>
                            <td>
                                <a href="{{ $team->linkedin_url }}" target="_blank"
                                    rel="noopener noreferrer">{{ $team->linkedin_url }}</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.teams.index') }}">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
