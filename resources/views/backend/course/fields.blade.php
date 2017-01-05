<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1-1" data-toggle="tab">General Information</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="tab_1-1">
            <div class="form-group">
                {!! Form::label('name', trans('labels.backend.course.fields.name'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('credit', trans('labels.backend.course.fields.credit'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-4">
                    {!! Form::number('credit', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('image', trans('labels.backend.course.fields.image'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::file('image', ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('syllabus', trans('labels.backend.course.fields.syllabus'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::file('syllabus', ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('semester', trans('labels.backend.course.fields.semester'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::select('semester', [1=>'1',2=>'2'], ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('department_id', trans('labels.backend.course.fields.department_id'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::select('department_id', $departments, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('outcome', trans('labels.backend.course.fields.outcome'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::textarea('outcome', null, ['class' => 'form-control','rows'=>3]) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('about', trans('labels.backend.course.fields.about'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::textarea('about', null, ['class' => 'form-control tinymce']) !!}
                </div>
            </div>
        </div>
    </div>
</div>

