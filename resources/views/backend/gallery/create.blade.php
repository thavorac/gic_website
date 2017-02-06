@extends ('backend.layouts.master')

@section ('title', trans('labels.backend.gallery.title.main') . ' | ' . trans('labels.backend.gallery.title.create'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.gallery.title.main') }}
        <small>{{ trans('labels.backend.gallery.title.create') }}</small>
    </h1>
@endsection
@section('after-styles-end')
    <link rel="stylesheet" href="{{url('plugins/bootstrap-fileinput/css/fileinput.min.css')}}">
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
    {!! Form::open(['route' => 'admin.gallery.store', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'post', 'id' => 'create-role', 'files' => true]) !!}

        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.gallery.title.create') }}</h3>
                <div class="pull-right">
                    <input type="submit" class="btn btn-success btn-xs" value="{{ trans('buttons.general.crud.create') }}" />
                    <a href="{!! route('admin.gallery.index') !!}" class="btn btn-default btn-xs">{{ trans('buttons.general.cancel') }}</a>
                </div>
            </div>

            <div class="box-body">
                @include('backend.gallery.fields')
            </div>
        </div>
    {!! Form::close() !!}
@stop

@section('after-scripts-end')
    {{ Html::script('plugins/bootstrap-fileinput/js/plugins/canvas-to-blob.min.js') }}
    {{ Html::script('plugins/bootstrap-fileinput/js/plugins/sortable.min.js') }}
    {{ Html::script('plugins/bootstrap-fileinput/js/plugins/purify.min.js') }}
    {{ Html::script('plugins/bootstrap-fileinput/js/fileinput.min.js') }}
    {{ Html::script('plugins/bootstrap-fileinput/themes/fa/theme.js') }}

{{--    {!! Html::script('vendor/laravel-filemanager/js/lfm.js') !!}--}}
    <script>
        $(function() {
//            $('#lfm').filemanager('file');
        });
    </script>
@stop