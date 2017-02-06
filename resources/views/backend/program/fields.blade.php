<div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1-1" data-toggle="tab">General Information</a></li>
        <li><a href="#about" data-toggle="tab">{{trans('labels.backend.program.fields.about')}}</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="tab_1-1">
            <div class="form-group">
                {!! Form::label('name', trans('labels.backend.program.fields.name'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('syllabus', trans('labels.backend.program.fields.syllabus'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    <div class="form-group" style="margin: 0px;">
                        <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm" data-input="syllabus" data-preview="holder" class="btn btn-primary">
                                    <i class="fa fa-picture-o"></i> Choose
                                </a>
                            </span>
                            <input id="syllabus" class="form-control" type="text" name="syllabus" >
                        </div>
                    </div>

                    <img id="holder" style="margin-top:15px;max-height:100px;" onError="this.onerror=null;this.src='{{url("img/sample_file.png")}}';">
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('program_type_id', trans('labels.backend.program.fields.program_type_id'), ['class' => 'col-lg-3 control-label']) !!}
                <div class="col-lg-9">
                    {!! Form::select('program_type_id',$program_types, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('description', trans('labels.backend.program.fields.description'), ['class' => 'col-lg-3 control-label']) !!}
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

