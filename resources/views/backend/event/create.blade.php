@extends ('backend.layouts.master')

@section ('title', trans('labels.backend.event.title.main') . ' | ' . trans('labels.backend.event.title.create'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.event.title.main') }}
        <small>{{ trans('labels.backend.event.title.create') }}</small>
    </h1>
@endsection
@section('after-styles-end')
    {!! Html::style('plugins/timepicker/css/bootstrap-timepicker.min.css') !!}
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
    {!! Form::open(['route' => 'admin.event.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-role']) !!}

        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.event.title.create') }}</h3>
                <div class="pull-right">
                    <input type="submit" class="btn btn-success btn-xs" value="{{ trans('buttons.general.crud.create') }}" />
                    <a href="{!! route('admin.event.index') !!}" class="btn btn-default btn-xs">{{ trans('buttons.general.cancel') }}</a>
                </div>
            </div>

            <div class="box-body">
                @include('backend.event.fields')
            </div>
        </div>
    {!! Form::close() !!}
@stop

@section('after-scripts-end')
    {!! Html::script('plugins/tinymce/tinymce.min.js') !!}
    {!! Html::script('plugins/moment/moment.min.js') !!}
    {!! Html::script('plugins/timepicker/js/bootstrap-timepicker.min.js') !!}
    {!! Html::script('plugins/datetimepicker/bootstrap-datetimepicker.min.js') !!}
    {!! Html::script('vendor/laravel-filemanager/js/lfm.js') !!}
    <script>
        tinymce_height = 600;
        $(function() {
            $('#lfm').filemanager('file');
        });
    </script>
    {!! Html::script('js/backend/init-tinymce.js') !!}
    {!! Html::script('js/backend/init-date.js') !!}
@stop