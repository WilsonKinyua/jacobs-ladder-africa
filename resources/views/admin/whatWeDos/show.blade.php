@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.whatWeDo.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.what-we-dos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.whatWeDo.fields.id') }}
                        </th>
                        <td>
                            {{ $whatWeDo->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.whatWeDo.fields.title') }}
                        </th>
                        <td>
                            {{ $whatWeDo->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.whatWeDo.fields.top_header_image') }}
                        </th>
                        <td>
                            @if($whatWeDo->top_header_image)
                                <a href="{{ $whatWeDo->top_header_image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $whatWeDo->top_header_image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.whatWeDo.fields.content_photo') }}
                        </th>
                        <td>
                            @if($whatWeDo->content_photo)
                                <a href="{{ $whatWeDo->content_photo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $whatWeDo->content_photo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.whatWeDo.fields.description') }}
                        </th>
                        <td>
                            {!! $whatWeDo->description !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.what-we-dos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection