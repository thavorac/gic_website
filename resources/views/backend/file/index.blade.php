@extends ('backend.layouts.master')
@section ('title', trans('labels.backend.file.title.main'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.file.title.main') }}
        <small>{{ trans('labels.backend.file.title.index') }}</small>
    </h1>

@endsection

@section('after-styles-end')

@stop

@section('content')

    <iframe id="frame" src='/laravel-filemanager?type=Files' frameborder="0" scrolling="no" width="100%" height="610"></iframe>

@stop

@section('after-scripts-end')
    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
    <script>
    </script>

@stop
