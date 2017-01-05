<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1-1" data-toggle="tab">General Information</a></li>
        <li><a href="#interest" data-toggle="tab">{{trans('labels.backend.employee.fields.interest')}}</a></li>
        <li><a href="#about_me" data-toggle="tab">{{trans('labels.backend.employee.fields.about_me')}}</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="tab_1-1">
            <div class="form-group">
                {!! Form::label('name_kh', trans('labels.backend.employee.fields.name_kh'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::text('name_kh', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('name_latin', trans('labels.backend.employee.fields.name_latin'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::text('name_latin', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('photo', trans('labels.backend.employee.fields.photo'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::file('photo', ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('dob', trans('labels.backend.employee.fields.dob'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::text('dob', null, ['class' => 'form-control date']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('start_working_date', trans('labels.backend.employee.fields.start_working_date'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::text('start_working_date', null, ['class' => 'form-control year']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('stop_working_date', trans('labels.backend.employee.fields.stop_working_date'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::text('stop_working_date', null, ['class' => 'form-control year']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('cv', trans('labels.backend.employee.fields.cv'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::file('cv', ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="tab-pane" id="interest">
            {!! Form::textarea('interest', null, ['class' => 'form-control tinymce']) !!}
        </div>
        <div class="tab-pane" id="about_me">
            {!! Form::textarea('about_me', null, ['class' => 'form-control tinymce']) !!}
        </div>
    </div>
</div>

