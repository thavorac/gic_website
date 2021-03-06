@extends ('backend.layouts.master')

@section ('title', trans('labels.backend.department.title.main') . ' | ' . trans('labels.backend.department.title.create'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.department.title.main') }}
        <small>{{ trans('labels.backend.department.title.create') }}</small>
    </h1>
@endsection
@section('after-styles-end')
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
    {!! Form::open(['route' => 'admin.department.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-role', 'files' => true]) !!}

        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.department.title.create') }}</h3>
                <div class="pull-right">
                    <input type="submit" class="btn btn-success btn-xs" value="{{ trans('buttons.general.crud.create') }}" />
                    <a href="{!! route('admin.department.index') !!}" class="btn btn-default btn-xs">{{ trans('buttons.general.cancel') }}</a>
                </div>
            </div>

            <div class="box-body">
                @include('backend.department.fields')
            </div>
        </div>
    {!! Form::close() !!}
@stop

@section('after-scripts-end')
    {!! Html::script('plugins/tinymce/tinymce.min.js') !!}
    {!! Html::script('vendor/laravel-filemanager/js/lfm.js') !!}
    <script>
        tinymce_height = 600;
        $(function() {
            $('#lfm').filemanager('file');
        });
    </script>
    {!! Html::script('js/backend/init-tinymce.js') !!}
@stop