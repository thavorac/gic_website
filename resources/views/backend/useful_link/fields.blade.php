<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1-1" data-toggle="tab">General Information</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="tab_1-1">
            <div class="form-group">
                {!! Form::label('name', trans('labels.backend.useful_link.fields.name'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('url', trans('labels.backend.useful_link.fields.url'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::text('url', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('description', trans('labels.backend.useful_link.fields.description'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::textarea('description', null, ['class' => 'form-control','rows'=>3]) !!}
                </div>
            </div>
        </div>
    </div>
</div>

