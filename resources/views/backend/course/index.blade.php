@extends ('backend.layouts.master')

@section ('title', trans('labels.backend.course.title.main'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.course.title.main') }}
        <small>{{ trans('labels.backend.course.title.index') }}</small>
    </h1>

@endsection

@section('after-styles-end')
    {!! Html::style('plugins/datatables/dataTables.bootstrap.css') !!}
@stop

@section('content')
    <div class="box box-success">
        <div class="box-header with-border">
            <div class="mailbox-controls">
                <a href="{!! route('admin.course.create') !!}">
                    <button class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> Add </button>
                </a>
                <button class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
            </div>
        </div>

        <div class="box-body">
            <div>
                <table class="table table-striped table-bordered table-hover dt-responsive nowrap" cellspacing="0" width="100%" id="data-table">
                    <thead>
                    <tr>
                        <th>{{ trans('labels.general.id') }}</th>
                        <th>{{ trans('labels.backend.course.fields.name') }}</th>
                        <th>{{ trans('labels.backend.course.fields.credit') }}</th>
                        <th>{{ trans('labels.backend.course.fields.image') }}</th>
                        <th>{{ trans('labels.backend.course.fields.about') }}</th>
                        <th>{{ trans('labels.general.actions') }}</th>
                    </tr>
                    </thead>
                </table>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
@stop

@section('after-scripts-end')
    {!! Html::script('plugins/datatables/jquery.dataTables.min.js') !!}
    {!! Html::script('plugins/datatables/dataTables.bootstrap.min.js') !!}
    <script>

        $(function() {
            $('#data-table').DataTable({
                processing: true,
                serverSide: true,
                pageLength: {!! config('app.records_per_page')!!},
                ajax: {
                    url: '{!! route('admin.course.data') !!}',
                    method: 'POST'
                },
                columns: [
                    { data: 'id', name: 'id'},
                    { data: 'name', name: 'name'},
                    { data: 'credit', name: 'credit',orderable: false, searchable: false},
                    { data: 'image', name: 'image',orderable: false, searchable: false},
                    { data: 'about', name: 'about',orderable: false, searchable: false},
                    { data: 'action', name: 'action',orderable: false, searchable: false}
                ]
            });

            enableDeleteRecord($('#data-table'));
        });
    </script>
@stop
