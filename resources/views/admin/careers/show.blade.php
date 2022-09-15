@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.career.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.careers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.career.fields.id') }}
                        </th>
                        <td>
                            {{ $career->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.career.fields.name') }}
                        </th>
                        <td>
                            {{ $career->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.career.fields.vacancy_image') }}
                        </th>
                        <td>
                            @if($career->vacancy_image)
                                <a href="{{ $career->vacancy_image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $career->vacancy_image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.career.fields.vacancy_document') }}
                        </th>
                        <td>
                            @if($career->vacancy_document)
                                <a href="{{ $career->vacancy_document->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.careers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection