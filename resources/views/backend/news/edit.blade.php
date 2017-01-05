@extends ('backend.layouts.master')

@section ('title', trans('labels.backend.academic_year.title.main') . ' | ' . trans('labels.backend.academic_year.title.edit'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.academic_year.title.main') }}
        <small>{{ trans('labels.backend.academic_year.title.edit') }}</small>
    </h1>
@endsection

@section('content')
    {!! Form::model($academic_year, ['route' => ['admin.academic_year.update', $academic_year->id],'class' => 'form-horizontal', 'role'=>'form', 'method' => 'patch']) !!}

        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.academic_year.title.edit') }}</h3>
            </div>

            <div class="box-body">
                @include ("backend.academic_year.fields")
            </div>
        </div>

        <div class="box box-success">
            <div class="box-body">
                <div class="pull-left">
                    <a href="{!! route('admin.academic_year.index') !!}" class="btn btn-danger btn-xs">{{ trans('buttons.general.cancel') }}</a>
                </div>

                <div class="pull-right">
                    <input type="submit" class="btn btn-info btn-xs" value="{{ trans('buttons.general.crud.update') }}" />
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    {!! Form::close() !!}
@stop
