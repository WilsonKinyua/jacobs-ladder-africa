@extends('layouts.admin')
@section('content')
@can('registered_user_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.registered-users.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.registeredUser.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.registeredUser.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-RegisteredUser">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.registeredUser.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.registeredUser.fields.full_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.registeredUser.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.registeredUser.fields.created_at') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($registeredUsers as $key => $registeredUser)
                        <tr data-entry-id="{{ $registeredUser->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $registeredUser->id ?? '' }}
                            </td>
                            <td>
                                {{ $registeredUser->full_name ?? '' }}
                            </td>
                            <td>
                                {{ $registeredUser->email ?? '' }}
                            </td>
                            <td>
                                {{ $registeredUser->created_at ?? '' }}
                            </td>
                            <td>
                                @can('registered_user_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.registered-users.show', $registeredUser->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('registered_user_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.registered-users.edit', $registeredUser->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('registered_user_delete')
                                    <form action="{{ route('admin.registered-users.destroy', $registeredUser->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('registered_user_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.registered-users.massDestroy') }}",
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
    order: [[ 2, 'asc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-RegisteredUser:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection