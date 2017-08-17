<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1-1" data-toggle="tab">General Information</a></li>
        <li><a href="#about_me" data-toggle="tab">{{trans('labels.backend.employee.fields.about_me')}}</a></li>
        <li><a href="#publication" data-toggle="tab">{{trans('labels.backend.employee.fields.publication')}}</a></li>
        <li><a href="#project" data-toggle="tab">{{trans('labels.backend.employee.fields.project')}}</a></li>
        <li><a href="#academic" data-toggle="tab">{{trans('labels.backend.employee.fields.academic')}}</a></li>
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
                {!! Form::label('phone', trans('labels.backend.department.fields.phone_email'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-3">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                        {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('photo', trans('labels.backend.employee.fields.photo'), ['class' => 'col-lg-3 control-label']) !!}
                <div class=" col-lg-9">
                    <div class="input-group">
                    <span class="input-group-btn">
                        <a data-input="photo" data-preview="holder" class="lfm btn btn-primary">
                            <i class="fa fa-picture-o"></i> Choose
                        </a>
                    </span>
                        <input id="photo" class="form-control" type="text" name="photo">
                    </div>
                    <img id="holder" style="margin-top:15px;max-height:100px;">
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
                <div class=" col-lg-9">
                    <div class="input-group">
                    <span class="input-group-btn">
                        <a data-input="cv" data-preview="holder" class="btn btn-primary lfm">
                            <i class="fa fa-picture-o"></i> Choose
                        </a>
                    </span>
                        <input id="cv" class="form-control" type="text" name="cv">
                    </div>
                    <img id="holder" style="margin-top:15px;max-height:100px;">
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('address', trans('labels.backend.department.fields.address'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::textarea('address', null, ['class' => 'form-control','rows'=>3]) !!}
                </div>
            </div>
        </div>
        <div class="tab-pane" id="about_me">
            {!! Form::textarea('about_me', null, ['class' => 'form-control tinymce']) !!}
        </div>
        <div class="tab-pane" id="publication">
            {!! Form::textarea('publication', null, ['class' => 'form-control tinymce']) !!}
        </div>
        <div class="tab-pane" id="project">
            {!! Form::textarea('project', null, ['class' => 'form-control tinymce']) !!}
        </div>
        <div class="tab-pane" id="academic">
            {!! Form::textarea('academic', null, ['class' => 'form-control tinymce']) !!}
        </div>
    </div>
</div>

