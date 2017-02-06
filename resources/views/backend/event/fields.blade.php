<div class="col-md-12" style="padding: 30px;">
    <div class="form-group">
        {!! Form::label('name', trans('labels.backend.event.fields.name'), ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="row">
        <div class="col-md-6" style="padding-right: 30px;">
            <div class="form-group">
                {!! Form::label('date_start', trans('labels.backend.event.fields.date_start'), ['class' => 'control-label']) !!}
                {!! Form::text('date_start', null, ['class' => 'form-control date']) !!}
            </div>
        </div>
        <div class="col-md-6" style="padding-left: 30px;">
            <div class="form-group">
                {!! Form::label('date_end', trans('labels.backend.event.fields.date_end'), ['class' => 'control-label']) !!}
                {!! Form::text('date_end', null, ['class' => 'form-control date']) !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6" style="padding-right: 30px;">
            <div class="form-group">
                {!! Form::label('time_start', trans('labels.backend.event.fields.time_start'), ['class' => 'control-label']) !!}
                <div class="input-group">
                    <input type="text" name="time_start" class="form-control timepicker">
                    <div class="input-group-addon">
                        <i class="fa fa-clock-o"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" style="padding-left: 30px;">
            <div class="form-group">
                {!! Form::label('time_end', trans('labels.backend.event.fields.time_end'), ['class' => 'control-label']) !!}
                <div class="input-group">
                    <input type="text" name="time_end" class="form-control timepicker">
                    <div class="input-group-addon">
                        <i class="fa fa-clock-o"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('location', trans('labels.backend.event.fields.location'), ['class' => 'control-label']) !!}
        {!! Form::text('location', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('require_register', trans('labels.backend.event.fields.require_register'), ['class' => 'control-label']) !!}
        {!! Form::checkbox('require_register', null, ['class' => 'form-control date']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('pending', trans('labels.backend.event.fields.pending'), ['class' => 'control-label']) !!}
        {!! Form::checkbox('pending', null, ['class' => 'form-control date']) !!}
    </div>
    <div class="form-group" >
        {!! Form::label('file', trans('labels.backend.event.fields.file')) !!}
        <div class="input-group">
                <span class="input-group-btn">
                    <a id="lfm" data-input="file" data-preview="holder" class="btn btn-primary">
                        <i class="fa fa-picture-o"></i> Choose
                    </a>
                </span>
            <input id="file" class="form-control" type="text" name="file">
        </div>
    </div>
    <img id="holder" style="margin-top:15px;max-height:100px;">

    <div class="form-group">
        {!! Form::label('about', trans('labels.backend.event.fields.about'), ['class' => 'control-label']) !!}
        {!! Form::textarea('about', null, ['class' => 'form-control tinymce']) !!}
    </div>
</div>


