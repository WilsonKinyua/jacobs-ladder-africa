@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.career.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.careers.update", [$career->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.career.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $career->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.career.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="country">{{ trans('cruds.career.fields.country') }}</label>
                <input class="form-control {{ $errors->has('country') ? 'is-invalid' : '' }}" type="text" name="country" id="country" value="{{ old('country', $career->country) }}">
                @if($errors->has('country'))
                    <div class="invalid-feedback">
                        {{ $errors->first('country') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.career.fields.country_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="town">{{ trans('cruds.career.fields.town') }}</label>
                <input class="form-control {{ $errors->has('town') ? 'is-invalid' : '' }}" type="text" name="town" id="town" value="{{ old('town', $career->town) }}">
                @if($errors->has('town'))
                    <div class="invalid-feedback">
                        {{ $errors->first('town') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.career.fields.town_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="type">{{ trans('cruds.career.fields.type') }}</label>
                <input class="form-control {{ $errors->has('type') ? 'is-invalid' : '' }}" type="text" name="type" id="type" value="{{ old('type', $career->type) }}">
                @if($errors->has('type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.career.fields.type_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.career.fields.job_category') }}</label>
                <select class="form-control {{ $errors->has('job_category') ? 'is-invalid' : '' }}" name="job_category" id="job_category">
                    <option value disabled {{ old('job_category', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Career::JOB_CATEGORY_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('job_category', $career->job_category) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('job_category'))
                    <div class="invalid-feedback">
                        {{ $errors->first('job_category') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.career.fields.job_category_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="salary_range">{{ trans('cruds.career.fields.salary_range') }}</label>
                <input class="form-control {{ $errors->has('salary_range') ? 'is-invalid' : '' }}" type="number" name="salary_range" id="salary_range" value="{{ old('salary_range', $career->salary_range) }}" step="0.01">
                @if($errors->has('salary_range'))
                    <div class="invalid-feedback">
                        {{ $errors->first('salary_range') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.career.fields.salary_range_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="vacancy_document">{{ trans('cruds.career.fields.vacancy_document') }}</label>
                <div class="needsclick dropzone {{ $errors->has('vacancy_document') ? 'is-invalid' : '' }}" id="vacancy_document-dropzone">
                </div>
                @if($errors->has('vacancy_document'))
                    <div class="invalid-feedback">
                        {{ $errors->first('vacancy_document') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.career.fields.vacancy_document_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="" for="vacancy_image">{{ trans('cruds.career.fields.vacancy_image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('vacancy_image') ? 'is-invalid' : '' }}" id="vacancy_image-dropzone">
                </div>
                @if($errors->has('vacancy_image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('vacancy_image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.career.fields.vacancy_image_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    Dropzone.options.vacancyDocumentDropzone = {
    url: '{{ route('admin.careers.storeMedia') }}',
    maxFilesize: 500, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    // params: {
    //   size: 500
    // },
    success: function (file, response) {
      $('form').find('input[name="vacancy_document"]').remove()
      $('form').append('<input type="hidden" name="vacancy_document" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="vacancy_document"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($career) && $career->vacancy_document)
      var file = {!! json_encode($career->vacancy_document) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="vacancy_document" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
<script>
    Dropzone.options.vacancyImageDropzone = {
    url: '{{ route('admin.careers.storeMedia') }}',
    maxFilesize: 20, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    // params: {
    //   size: 20,
    //   width: 5000,
    //   height: 5000
    // },
    success: function (file, response) {
      $('form').find('input[name="vacancy_image"]').remove()
      $('form').append('<input type="hidden" name="vacancy_image" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="vacancy_image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($career) && $career->vacancy_image)
      var file = {!! json_encode($career->vacancy_image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="vacancy_image" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}

</script>
@endsection