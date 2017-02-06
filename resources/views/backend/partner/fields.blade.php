<div class="row" style="margin: 30px">
    <div class="form-group">
        {!! Form::label('name', trans('labels.backend.partner.fields.name'), ['class' => 'col-lg-3 control-label']) !!}
        <div class="col-lg-9">
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('url', trans('labels.backend.partner.fields.url'), ['class' => 'col-lg-3 control-label']) !!}
        <div class="col-lg-9">
            {!! Form::text('url', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('logo', trans('labels.backend.partner.fields.logo'), ['class' => 'col-lg-3 control-label']) !!}
        <div class="col-lg-9">
            <div class="input-group">
                <span class="input-group-btn">
                    <a id="lfm" data-input="logo" data-preview="holder" class="btn btn-primary">
                        <i class="fa fa-picture-o"></i> Choose
                    </a>
                </span>
                <input id="logo" class="form-control" type="text" name="logo">
            </div>
            <img id="holder" style="margin-top:15px;max-height:100px;">
        </div>
    </div>


    <div class="form-group">
        {!! Form::label('mou', trans('labels.backend.partner.fields.mou'), ['class' => 'col-lg-3 control-label']) !!}
        <div class="col-lg-9">
            {!! Form::checkbox('mou', null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('partner_type_id', trans('labels.backend.partner.fields.partner_type_id'), ['class' => 'col-lg-3 control-label']) !!}
        <div class="col-lg-9">
            {!! Form::select('partner_type_id', $partner_types, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('description', trans('labels.backend.partner.fields.description'), ['class' => 'col-lg-3 control-label']) !!}
        <div class="col-lg-9">
            {!! Form::textarea('description', null, ['class' => 'form-control','rows'=>3]) !!}
        </div>
    </div>
</div>


