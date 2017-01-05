<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1-1" data-toggle="tab">General Information</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="tab_1-1">
            <div class="form-group">
                {!! Form::label('title', trans('labels.backend.gallery.fields.title'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('image', trans('labels.backend.gallery.fields.image'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::file('image', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('level', trans('labels.backend.gallery.fields.level'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::number('level', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('description', trans('labels.backend.gallery.fields.description'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::textarea('description', null, ['class' => 'form-control','rows'=>3]) !!}
                </div>
            </div>
        </div>
    </div>
</div>

