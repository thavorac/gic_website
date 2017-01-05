<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1-1" data-toggle="tab">General Information</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="tab_1-1">
            <div class="form-group">
                {!! Form::label('name', trans('labels.backend.event.fields.name'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('start', trans('labels.backend.event.fields.start'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::text('start', null, ['class' => 'form-control date']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('end', trans('labels.backend.event.fields.end'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::text('end', null, ['class' => 'form-control date']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('require_register', trans('labels.backend.event.fields.require_register'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::checkbox('require_register', null, ['class' => 'form-control date']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('pending', trans('labels.backend.event.fields.pending'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::checkbox('pending', null, ['class' => 'form-control date']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('file', trans('labels.backend.event.fields.file'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::file('file', ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('about', trans('labels.backend.event.fields.about'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::textarea('about', null, ['class' => 'form-control tinymce']) !!}
                </div>
            </div>
        </div>
    </div>
</div>

