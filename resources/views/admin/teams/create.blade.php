@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.team.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.teams.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.team.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.team.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.team.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.team.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="intro_caption">{{ trans('cruds.team.fields.intro_caption') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('intro_caption') ? 'is-invalid' : '' }}" name="intro_caption" id="intro_caption">{!! old('intro_caption') !!}</textarea>
                @if($errors->has('intro_caption'))
                    <div class="invalid-feedback">
                        {{ $errors->first('intro_caption') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.team.fields.intro_caption_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="user_bio">{{ trans('cruds.team.fields.user_bio') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('user_bio') ? 'is-invalid' : '' }}" name="user_bio" id="user_bio">{!! old('user_bio') !!}</textarea>
                @if($errors->has('user_bio'))
                    <div class="invalid-feedback">
                        {{ $errors->first('user_bio') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.team.fields.user_bio_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="profile_picture">{{ trans('cruds.team.fields.profile_picture') }}</label>
                <div class="needsclick dropzone {{ $errors->has('profile_picture') ? 'is-invalid' : '' }}" id="profile_picture-dropzone">
                </div>
                @if($errors->has('profile_picture'))
                    <div class="invalid-feedback">
                        {{ $errors->first('profile_picture') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.team.fields.profile_picture_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="twitter_url">{{ trans('cruds.team.fields.twitter_url') }}</label>
                <textarea class="form-control {{ $errors->has('twitter_url') ? 'is-invalid' : '' }}" name="twitter_url" id="twitter_url">{{ old('twitter_url') }}</textarea>
                @if($errors->has('twitter_url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('twitter_url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.team.fields.twitter_url_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="linkedin_url">{{ trans('cruds.team.fields.linkedin_url') }}</label>
                <textarea class="form-control {{ $errors->has('linkedin_url') ? 'is-invalid' : '' }}" name="linkedin_url" id="linkedin_url">{{ old('linkedin_url') }}</textarea>
                @if($errors->has('linkedin_url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('linkedin_url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.team.fields.linkedin_url_helper') }}</span>
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
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('admin.teams.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $team->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

<script>
    Dropzone.options.profilePictureDropzone = {
    url: '{{ route('admin.teams.storeMedia') }}',
    maxFilesize: 5000, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    // params: {
    //   size: 5000,
    //   width: 5000,
    //   height: 5000
    // },
    success: function (file, response) {
      $('form').find('input[name="profile_picture"]').remove()
      $('form').append('<input type="hidden" name="profile_picture" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="profile_picture"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($team) && $team->profile_picture)
      var file = {!! json_encode($team->profile_picture) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="profile_picture" value="' + file.file_name + '">')
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