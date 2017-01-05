<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1-1" data-toggle="tab">General Information</a></li>
        <li><a href="#about" data-toggle="tab">{{trans('labels.backend.room_lab.fields.about')}}</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="tab_1-1">
            <div class="form-group">
                {!! Form::label('name', trans('labels.backend.room_lab.fields.name'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('person_in_charge', trans('labels.backend.room_lab.fields.person_in_charge'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::text('person_in_charge', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('department_id', trans('labels.backend.room_lab.fields.department_id'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::select('department_id', $departments, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('description', trans('labels.backend.room_lab.fields.description'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::textarea('description', null, ['class' => 'form-control','rows'=>3]) !!}
                </div>
            </div>
        </div>
        <div class="tab-pane" id="about">
            {!! Form::textarea('about', null, ['class' => 'form-control tinymce']) !!}
        </div>
    </div>
</div>

