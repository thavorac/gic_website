@extends ('backend.layouts.master')

@section ('title', trans('labels.backend.blog.title.main') . ' | ' . trans('labels.backend.blog.title.edit'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.blog.title.main') }}
        <small>{{ trans('labels.backend.blog.title.edit') }}</small>
    </h1>
@endsection

@section('content')
    {!! Form::model($blog, ['route' => ['admin.blog.update', $blog->id],'class' => 'form-horizontal', 'role'=>'form', 'method' => 'patch']) !!}

        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.blog.title.edit') }}</h3>
                <div class="pull-right">
                    <input type="submit" class="btn btn-info btn-xs" value="{{ trans('buttons.general.crud.update') }}" />
                    <a href="{!! route('admin.blog.index') !!}" class="btn btn-default btn-xs">{{ trans('buttons.general.cancel') }}</a>
                </div>
            </div>

            <div class="box-body">
                @include ("backend.blog.fields")
            </div>
        </div>
    {!! Form::close() !!}
@stop
@section('after-scripts-end')
    {!! Html::script('plugins/tinymce/tinymce.min.js') !!}
    <script>
        tinymce_height = 600;
        $(function() {
        });
    </script>
    {!! Html::script('js/backend/init-tinymce.js') !!}
@stop
