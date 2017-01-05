@extends ('backend.layouts.master')

@section ('title', trans('labels.backend.scholarship_winner.title.main') . ' | ' . trans('labels.backend.scholarship_winner.title.create'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.scholarship_winner.title.main') }}
        <small>{{ trans('labels.backend.scholarship_winner.title.create') }}</small>
    </h1>
@endsection
@section('after-styles-end')
    {!! Html::style('plugins/datetimepicker/bootstrap-datetimepicker.min.css') !!}
    <style>
        .box-body {
            padding: 0px !important;
        }
        .nav-tabs-custom {
            margin-bottom: 0px !important;
        }
    </style>
@stop

@section('content')
    {!! Form::open(['route' => 'admin.scholarship_winner.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-role']) !!}

        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.scholarship_winner.title.create') }}</h3>
                <div class="pull-right">
                    <input type="submit" class="btn btn-success btn-xs" value="{{ trans('buttons.general.crud.create') }}" />
                    <a href="{!! route('admin.scholarship_winner.index') !!}" class="btn btn-default btn-xs">{{ trans('buttons.general.cancel') }}</a>
                </div>
            </div>

            <div class="box-body">
                @include('backend.scholarship_winner.fields')
            </div>
        </div>
    {!! Form::close() !!}
@stop

@section('after-scripts-end')
    {!! Html::script('plugins/datatables/jquery.dataTables.min.js') !!}
    {!! Html::script('plugins/datatables/dataTables.bootstrap.min.js') !!}
    {!! Html::script('plugins/tinymce/tinymce.min.js') !!}
    {!! Html::script('plugins/moment/moment.min.js') !!}
    {!! Html::script('plugins/datetimepicker/bootstrap-datetimepicker.min.js') !!}
    <script>
        tinymce_height = 600;
        $(function() {

        });
    </script>
    {!! Html::script('js/backend/init-tinymce.js') !!}
    {!! Html::script('js/backend/init-date.js') !!}
@stop