@extends('layouts.admin')
@section('content')
@can('what_we_do_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.what-we-dos.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.whatWeDo.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.whatWeDo.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-WhatWeDo">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.whatWeDo.fields.title') }}
                        </th>
                        <th>
                            {{ trans('cruds.whatWeDo.fields.content_photo') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($whatWeDos as $key => $whatWeDo)
                        <tr data-entry-id="{{ $whatWeDo->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $whatWeDo->title ?? '' }}
                            </td>
                            <td>
                                @if($whatWeDo->content_photo)
                                    <a href="{{ $whatWeDo->content_photo->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $whatWeDo->content_photo->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                @can('what_we_do_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.what-we-dos.show', $whatWeDo->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('what_we_do_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.what-we-dos.edit', $whatWeDo->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('what_we_do_delete')
                                    <form action="{{ route('admin.what-we-dos.destroy', $whatWeDo->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('what_we_do_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.what-we-dos.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'asc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-WhatWeDo:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection